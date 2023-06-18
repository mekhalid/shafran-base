<?php
if (isset($_GET['idp'])) {
	$id = $_GET['idp'];
} else {
	die("Error. No ID Selected!");
}
include "koneksi.php";
$query    = mysqli_query($db, "SELECT * FROM bogor WHERE idp='$id'");
$result    = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<meta http-equiv='cache-control' content='no-cache'>
	<meta http-equiv='expires' content='0'>
	<meta http-equiv='pragma' content='no-cache'>

	<title>Tiket Anda</title>
	<link rel="stylesheet" href="assets1/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
</head>

<body id="page-top">
	<div><img src="assets1/img/lmpg.jpeg" class="img-fluid" alt="...">
	</div>
	<header class="text-center text-white d-flex masthead" style="background-color: #0d0d0f;">
		<div class="container my-auto">
			<div class="row">
				<div class="col-lg-10 mx-auto" style="margin-top: -150px; margin-bottom: -50px;">
					<h1 class="text-uppercase"><strong>Selamat <b><?php echo $result['nama'] ?></b></strong></h1>
					<hr>
					<h3>ID kamu adalah <b><?php echo $result['idp']; ?></b></h3>
					<br>
					<h6>Silahkan di screenshot halaman ini, dan tunjukan kepada bagian registrasi ketika seminar</h6>

					<span>Jangan di sebar link yang sudah anda dapatkan, maupun screenshot halaman ini !!!</span>
				</div>
			</div>
		</div>
	</header>
	<section id="about" style="background-color: #ce9f4e; padding: 15px;">
		<div class="container">
			<div class="row">
				<div class="col offset-lg-8 text-center mx-auto">
					<h2 class="text-white section-heading">Hal-Hal yang harus dibawa</h2>
				</div>
			</div>
			<p class="text-faded mb-4">
				-Buku Catatan<br>
				-Al-quran Terjemahan<br>
				-Hati yang Bersih<br>
				-Infaq Terbaik<br>
			</p>
		</div>
	</section>
	<footer>
		<div><img src="assets1/img/foot.jpeg" class="img-fluid" alt="...">
		</div>
	</footer>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
	<script src="assets1/js/script.min.js"></script>
</body>

</html>