<?php
session_start();
session_destroy();
header("Location: ./login.php");
exit;
?>

<!-- Ini nya aku ubah, langsung pindah ke halaman login langsung
<div align="center">
  <h2>Anda telah berhasil logout..</h2>
  Silahkan klik <a href="./login.php">disini</a> untuk login kembali
</div> -->