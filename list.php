<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Data Peserta</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
</head>

<body id="page-top">
    <div id="wrapper">
        <!-- 
        navigasi
        -->
        <div class="container-fluid">
            <h3 class="text-dark mb-4">list peserta</h3>
            <table class="table my-0" id="dataTable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>ID</th>
                        <th>Link</th>
                        <th>WA</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                        include 'koneksi.php';
                        $no = 1;
                        $data = mysqli_query($db, "select * from bogor");
                        while ($d = mysqli_fetch_array($data)) { ?>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $d['nama']; ?></td>
                            <td><?php echo $d['idp']; ?></td>
                            <td><a href="tiket.php?idp=<?php echo $d['idp']; ?>">Detail</a></td>
                            <td><a href="https://api.whatsapp.com/send/?phone=<?php echo $d['nohp']; ?>&text=Assalamualaikum <?php echo $d['nama']; ?>.%0ABerikut%20Link%20tiket%20Seminar%20Semua%20Bisa%20Hafal%20Qur'an%20https://riilhijrah.com/mks/tiket.php?idp=<?php echo $d['idp']; ?>%0ACara%20menyimpan%20tiketnya:%0A1.%20Klik%20link%20diatas%0A2.%20screenshot%20halaman%20(terutama%20nama%20dan%20ID%20peserta%20nya)%0A3.%20ketika%20ingin%20masuk%20ke%20seminar,%20tunjukan%20hasil%20screenshot%20tersebut%20kepada%20panita.%0APeringatan!!!%20Jangan%20Disebar%20Link%20nya%20karena%20masing%20masing%20orang%20berbeda%20link%20nya%0A%0AJazakumullah%20khairan,%20semoga%20kita%20semua%20bisa%20menghafal%20quran%20sampai%20mati,%20aamiin%20%F0%9F%98%8A%20~Admin%20Riil%20Hijrah&app_absent=0"><button class="btn btn-primary">Whatsapp</button></a></td>
                    </tr>
                <?php
                        }
                ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- disini tempat untuk up 
        <a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
        -->
    <footer class="bg-white sticky-footer">
        <div class="container my-auto">
            <div class="text-center my-auto copyright"><span>Copyright ©yayasan masjid sulthan 2021</span></div>
        </div>
    </footer>

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>