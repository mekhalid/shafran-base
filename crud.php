<?php
require __DIR__ . '/vendor/autoload.php';
include "koneksi.php";
$options = array(
    'cluster' => 'ap1',
    'useTLS' => true
);
$pusher = new Pusher\Pusher(
    '20bb0998f0ff1acf1c7d',
    '2ca5b73235e34a7e4dce',
    '1620714',
    $options
);
$act = $_GET['act'];
if ($act == "get_data") {
    $query = mysqli_query($db, "SELECT * FROM bogor");
    $no = 1;
    while ($data = mysqli_fetch_assoc($query)) {
?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['idp']; ?></td>
            <td><a href="tiket.php?idp=<?php echo $data['idp']; ?>" target="_blank" class="btn btn-primary">Detail</a>
                <a href="https://api.whatsapp.com/send/?phone=<?php echo $data['nohp']; ?>&text=Assalamualaikum <?php echo $data['nama']; ?>.%0ABerikut%20Link%20tiket%20Seminar%20Semua%20Bisa%20Hafal%20Qur'an%20https://riilhijrah.com/mks/tiket.php?idp=<?php echo $data['idp']; ?>%0ACara%20menyimpan%20tiketnya:%0A1.%20Klik%20link%20diatas%0A2.%20screenshot%20halaman%20(terutama%20nama%20dan%20ID%20peserta%20nya)%0A3.%20ketika%20ingin%20masuk%20ke%20seminar,%20tunjukan%20hasil%20screenshot%20tersebut%20kepada%20panita.%0APeringatan!!!%20Jangan%20Disebar%20Link%20nya%20karena%20masing%20masing%20orang%20berbeda%20link%20nya%0A%0AJazakumullah%20khairan,%20semoga%20kita%20semua%20bisa%20menghafal%20quran%20sampai%20mati,%20aamiin%20%F0%9F%98%8A%20~Admin%20Riil%20Hijrah&app_absent=0"><button class="btn btn-success">Whatsapp</button></a>
            </td>
            <td>
                <?php $id = $data['id']; ?>
                <a href="edit.php?id=<?php echo $id; ?>" class="btn btn-primary">Edit</a>
                <a href="crud.php?id=<?php echo $id; ?>&act=delete_data" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</a>
            </td>
        </tr>
<?php
    }
} else if ($act == "insert_data") {
    $nama = $_POST['nama'];
    $nohp = $_POST['nohp'];
    $idp = $_POST['idp'];
    $query = mysqli_query($db, "INSERT INTO bogor (nama, nohp, idp) VALUES('$nama','$nohp','$idp')");
    if ($query) {
        echo "berhasil";
        $data['message'] = 'success';
        $pusher->trigger('my-channel', 'my-event', $data);
        header("location:input.php");
    } else {
        echo mysqli_error($db);
    }
} elseif ($act == "update_data") {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $nohp = $_POST['nohp'];
    $idp = $_POST['idp'];
    $query_mysqli = mysqli_query($db, "SELECT * FROM bogor WHERE id='$id'") or die(mysqli_error($db));
    while ($data = mysqli_fetch_array($query_mysqli)) {
        $fix = $data['id'];
        $oke = "UPDATE bogor SET nama = '$nama', nohp='$nohp', idp='$idp' WHERE id='$id'";
        $simpan = $db->query($oke);
        if ($simpan) {
            echo "Berhasil update data peserta";
            $data['message'] = 'success';
            $pusher->trigger('my-channel', 'my-event', $data);
            header("location:daftarpeserta.php");
        } else {
            echo mysqli_error($db);
        }
    }
} elseif ($act == "delete_data") {
    $id = $_GET['id'];
    $query_mysqli = mysqli_query($db, "SELECT * FROM bogor WHERE id='$id'") or die(mysqli_error($db));
    $data = mysqli_fetch_assoc($query_mysqli);
    $query_delete = mysqli_query($db, "DELETE FROM bogor WHERE id='$id'");
    if ($query_delete) {
        echo "Berhasil menghapus data peserta";
        $data['message'] = 'success';
        $pusher->trigger('my-channel', 'my-event', $data);
        header("location:daftarpeserta.php");
    } else {
        echo mysqli_error($db);
    }
}
?>