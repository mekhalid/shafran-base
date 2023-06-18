<?php 
include "koneksi.php";
	$id = $_POST['id'];
  $nama = $_POST['nama'];
  $nohp = $_POST['nohp'];
  $idp = $_POST['idp'];
	$query_mysqli = mysqli_query($db,"SELECT * FROM bogor WHERE id='$id'")or die(mysqli_error());
	while($data = mysqli_fetch_array($query_mysqli)){
		$fix = $data['id'];
$oke = "UPDATE bogor SET nama = '$nama', nohp='$nohp', idp='$idp' WHERE id='$id'";
       $simpan = $db->query($oke);
       if($simpan) {
         echo "<div align='center'>Pendaftaran Sukses, Kembali ke <a href='daftarpeserta.php'>Home</a></div>";
         header("location:daftarpeserta.php");
       } else {
         echo "<div align='center'>Proses Gagal!</div>";
       }

 }
