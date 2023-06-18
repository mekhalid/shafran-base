<?php
   require_once("koneksi.php");
   $full = $_POST['fullname'];
   $no = $_POST['nohp'];
     if(!$full || !$no) {
       echo "<script>alert('masih ada data yang kosong');history.go(-1);</script>";
     } else {
       $data = "INSERT INTO sertifikat VALUES (NULL,'$full', '$no')";
       $simpan = $db->query($data);
       if($simpan) {
         echo "<script>alert('Data anda sudah masuk, silahkan exit browser jika sudah selesai. nanti sertifikat akan segera dikirim');history.go(-1);</script>";
       } else {
         echo "<script>alert('Data tidak masuk');history.go(-1);</script>";
       }
     }
  ?>