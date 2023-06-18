<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div>
        <br>
        <br>
        <h1 class="text-center">Sertifikat Seminar Semua Bisa Hafal Qur'an Lampung</h1>
    </div>
    <div>
        <h5>Cara Buat Sertifikat</h5>
        <p>1. Isi nama kamu (Huruf Besar Kecil Berpengaruh)<br>2. Klik ENTER<br>3. muncul sertifikat kamu<br>4. download sertifikat kamu.<br></p>
        <h5>Cara Download Sertifikat</h5>
        <p>1. Klik tahan gambar (via Hp)<br>2. Klik Bagikan Gambar<br>3. Pilih Simpan ke Perangkat<br></p>
    </div>
    <form action="img.php" method="post" onSubmit="return validasi()">
    <div class="form-">
        <h5>Tulis Nama Kamu</h5>

        <input type="text" name="nama" value="<?php $nama?>" class="border rounded-0 float-none justify-content-center align-items-center align-content-center align-self-center">
        <br>
        <br>
    </div>
    <div><button class="btn btn-primary btn-block" type="submit">Enter</button></div>
    </form>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>