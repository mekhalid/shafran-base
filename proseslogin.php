<?php
session_start();
require_once("koneksi.php");
$username = $_POST['username'];
$pass = $_POST['password'];

// Periksa apakah password tidak kosong
if (empty($pass)) {
  echo "<script>alert('Anda belum memasukkan password!'); window.location='login.php';</script>";
  exit;
}

$sql = "SELECT * FROM user WHERE nama = '$username'";
$query = $db->query($sql);
$hasil = $query->fetch_assoc();

if ($query->num_rows > 0) {
  if ($hasil !== null && $pass == $hasil['password']) {
    $_SESSION['login'] = $hasil['nama'];
    header('location:index.php');
  } else {
    echo "<script>alert('Password salah!'); window.location='login.php';</script>";
  }
} else {
  echo "<script>alert('Username belum terdaftar!'); window.location='login.php';</script>";
}
?>



<!-- Aku memperbaiki masalah login yang ada pada disini..
Tadi ada sedikit kesalahan, ketika usernama diisi namaun pass diisi secara asal2an user bisa login ke index.js dan menambah sedikit pengkondisian yang dimana jika user belum menginputkan password maka munculkan alert.
Dan mengganti div menjadi fungsi alert js agar jika user salah memasukkan pass maupun username popup alert akan muncul -->