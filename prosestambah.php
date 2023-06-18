<?php
include "koneksi.php";

$nama = $_POST['nama'];
$nohp = $_POST['nohp'];
$idp = $_POST['idp'];

// Menyimpan data ke database
$query = "INSERT INTO bogor (nama, nohp, idp) VALUES ('$nama', '$nohp', '$idp')";
if ($db->query($query)) {
    echo "<script>alert('Input user berhasil!'); window.location='login.php';</script>";
    header("Location: daftarpeserta.php");
} else {
    echo "<script>alert('Input user gagal!'); window.location='login.php';</script>";
    header("Location: input.php");
}
