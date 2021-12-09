<?php

session_start();
if (!isset($_SESSION["login"])) {
	header("Location: form-sign.php");
	exit;
}
?>
<!DOCTYPE HTML>
<html>

<head>
	<title>Home</title>
	<link rel="icon" href="images/logo-m.png">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/responsiveslides.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="js/responsiveslides.min.js"></script>
	<script>
		$(function() {
			$("#slider1").responsiveSlides({
				maxwidth: 1600,
				speed: 600
			});
		});
	</script>
	<style>
		#footer {
			height: 90px;
		}

		#footer #text {
			color: #fff;
			padding: 10px;
			font-size: 15pt;
			text-shadow: #000 1px 1px 2px;
		}
	</style>
</head>
<div class="header-top-nav">
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="Gallery.php">Gallery</a></li>
		<li class="active"><a href="about.php">About</a></li>
		<li><a href="Contact.php">Contact</a></li>
		<li><a href="SignUp.html">Sign Up | Sign In </a></li>
		<div class="clear"> </div>
	</ul>
</div>
</div>
</div>
<div class="clear"> </div>
<div class="image-slider">
	<ul class="rslides" id="slider1">
		<li><img src="images/slider1.jpg" alt=""></li>
		<li><img src="images/slider2.jpg" alt=""></li>
		<li><img src="images/slider3.jpg" alt=""></li>
	</ul>
</div>
<div class="content">
	<div class="quit">
		<p><span class="start">Future </span> Reservation <span class="end">Hotel Mercure</span></p>
	</div>

	<body>
		<div class="content-box-left-topgrid">
			<h3>About Mercure</h3>
			<p style="text-indent:40px;">Perusahaan hotel Mercure yang dibawahi oleh Accor Company merupakan
				perusahaan yang bergerak pada industri jasa penginapan serta jasa penyewaan tempatuntuk berkumpul untuk membuat
				event/meeting/pernikahan hingga seminar, yang berasal dari Saint Witz Perancis Perusahaan tersebut berdiri mulai
				tahun 1973. Dikaitkan dengan karakteristik jasa . Perusahaan ini menawarkan produk yangintangible yaitu segala
				sesuatu yang berkaitan pelayanan dan pembentukan citra suatu produk<br> dan hotel. Di dalam bisnis perhotelan intangible
				diberikan bersamaan dengan penjualan produk tangible. Rasa bersahabat, sopan santun, keramahtamahan dan rasa hormat
				dari seluruh karyawan merupakan salah satu contoh produk bintangible yang sederhana tetapi sangat berdampak pada
				pembentukan citra hotel. Agar fasilitas yang disediakan oleh hotel dapat berfungsi, maka disertai dengan pelayanan
				adapun pelayanan tersebut dapat berupa: corak/gaya pelayanan yang diberikan oleh <br>parakaryawan pelayanan dapat juga
				berupa waktu buka restoran, pelayanan kebersihan kamar pelayanan dan penyajian makanan dan minuman di restoran.</p>
		</div> 
		<br>
		<br>
		<div id="footer">
			<div id="text">
				<p style="text-align:center;">Copyright &copy 2021 Mercure Hotel</p>
			</div>
		</div>
	</body>

</html>