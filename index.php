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
		<li class="active"><a href="index.php">Home</a></li>
		<li><a href="Gallery.php">Gallery</a></li>
		<li><a href="about.php">About</a></li>
		<li><a href="contact.php">Contact</a></li>
		<li><a href="form-sign.php">Sign Up | Sign In </a></li>
		<div class="clear"> </div>
	</ul>
</div>
</div>
</div>
<div class="clear"> </div>
<div class="image-slider">
	<ul class="rslides" id="slider1">
		<li><img src="images/slider3.jpg" alt=""></li>
		<li><img src="images/slider1.jpg" alt=""></li>
		<li><img src="images/slider3.jpg" alt=""></li>
	</ul>
</div>
<div class="content">
	<div class="quit">
		<p><span class="start">Future </span> Reservation <span class="end">Hotel Mercure</span></p>
	</div>
	<div class="content-grids">
		<div class="wrap">
			<div class="content-grid">
				<div class="content-grid-pic">
					<a href="#"><img src="images/icon1.png" title="image-name" /></a>
				</div>
				<div class="content-grid-info">
					<h3>Best food Ever</h3>
					<p>"Fried Chicken super"</p>
					<p>"Rice bowl"</p>
					<p>"Fried Rice Universe"</p>
					<p>"Noodle meet"</p>
					<p>"Seafood Hot in Summer"</p>
				</div>
				<div class="clear"> </div>
			</div>
			<div class="content-grid">
				<div class="content-grid-pic">
					<a href="#"><img src="images/icon2.png" title="image-name" /></a>
				</div>
				<div class="content-grid-info">
					<h3>24x7 phone support</h3>
					<p>"Please contact 021-834374"</p>
				</div>
				<div class="clear"> </div>
			</div>
			<div class="content-grid">
				<div class="content-grid-pic">
					<a href="#"><img src="images/iocn3.png" title="image-name" /></a>
				</div>
				<div class="content-grid-info">
					<h3>Best Room Services</h3>
					<p>"Excellent seafood"</p>
					<p>"Breakfast Ever"</p>
				</div>
				<div class="clear"> </div>
			</div>

			<div class="clear"> </div>
		</div>
	</div>
	<div class="clear"> </div>
	<div class="content-box">
		<div class="wrap">
			<div class="content-box-left">
				<div class="content-box-left-topgrid">
					<h3>welcome to our Hotel</h3>
					<p>Did you know?</p>
					<p>Mercure Hotel is one of the 4 star hotels at an affordable price.
						However, the quality is number 1 in Indonesia. You can get a variety
						of attractive advantages such as clean rooms, places of worship,
						swimming pools and easily accessible centers. Immediately come directly
						to the address below and also enjoy the most comfortable lodging at this time.</p>
					<span>For more information about our Hotel, Call 021-834374</span>
				</div>
				<div class="content-box-left-bootomgrids">
					<div class="content-box-left-bootomgrid">
						<h3>Standard Rooms</h3>
						<p> Standard Room memiliki fasilitas televisi, pembuat kopi, telepon, meja, kloset dan kamar mandi
							dan beberapa fasilitas lainnya.</p>
						<a href="#"><img src="images/slider1.jpg" title="image-name" /></a>
					</div>
					<div class="content-box-left-bootomgrid">
						<h3>Premium Room Rooms</h3>
						<p>Premium Room memiliki fasilitas televisi, pembuat kopi, telepon, kulkas, Wi-Fi, dan kamar mandi.
							Memiliki ukuran ,fasilitas dan ruangan yang lebih luas.</p>
						<a href="#"><img src="images/slider2.jpg" title="image-name" /></a>
					</div>
					<div class="content-box-left-bootomgrid lastgrid">
						<h3>Deluxe Rooms</h3>
						<p>Deluxe Room memiliki fasilitas kulkas, televisi, telepon, full AC, Wi-Fi, makanan dan kamar mandi
							desain untuk terlihat lebih berkelas dalam ukuran dan lokasinya. </p>
						<a href="#"><img src="images/slider3.jpg" title="image-name" /></a>
					</div>
					<div class="clear"> </div>
				</div>
				<div class="clear"> </div>
			</div>
			<div class="content-box-right">
				<div class="content-box-right-topgrid">
					<h3>To days Specials</h3>
					<a href="#"><img src="images/slider1.jpg" title="imnage-name" /></a>
					<h4>December is Rainy</h4>
					<p>"Dinner in Last Night"</p>
				</div>
				<div class="content-box-right-bottomgrid">

				</div>
			</div>
			<div class="clear"> </div>
		</div>
		<div class="clear"> </div>
		<div class="boxs">
			<div class="wrap">
				<div class="box">

				</div>

				<div class="clear"> </div>
			</div>
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