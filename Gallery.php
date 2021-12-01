<?php

session_start();
if (!isset($_SESSION["login"])) {
  header("Location: form-sign.php");
  exit;
}
?>
<!DOCTYPE HTML>
<html lang="en">

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
    div.gallery {
      border: 3px solid #ccc;
      border-radius: 5%;
      background-color: rgb(39, 155, 68);
    }

    div.gallery:hover {
      border: 3px solid rgb(39, 155, 68);
      background-color: rgb(39, 155, 68);
    }

    div.gallery img {
      width: 100%;
      border-radius: 5% 5% 0% 0%;
      height: auto;
    }

    h2 {
      font-size: 40px;
      font-family: 'Segoe UI';
      text-shadow: 2px 2px rgba(55, 148, 60, 0.61);
    }

    div.desc {
      padding: 20px;
      font-family: 'Segoe UI';
      font-weight: bold;
      color: white;
      text-align: center;
    }

    div.desc:hover {
      color: paleturquoise;
    }

    * {
      box-sizing: border-box;
    }

    .responsive {
      padding: 0 6px;
      float: left;
      width: 24.99999%;
    }

    @media only screen and (max-width: 700px) {
      .responsive {
        width: 49.99999%;
        margin: 6px 0;
      }
    }

    @media only screen and (max-width: 500px) {
      .responsive {
        width: 100%;
      }
    }

    .clearfix:after {
      content: "";
      display: table;
      clear: both;
    }

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
    <li class="active"><a href="Gallery.php">Gallery</a></li>
    <li><a href="about.php">About</a></li>
    <li><a href="Contact.php">Contact</a></li>
    <li><a href="SignUp.php">Sign Up | Sign In </a></li>
    <div class="clear"> </div>
  </ul>
</div>
</div>
</div>
<div class="content">
  <div class="quit">
    <p><span class="start">Future </span> Reservation <span class="end">Gallery Hotel Mercure</span></p>
  </div>


  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="images/room9.jpg">
        <img src="images/room9.jpg" alt="Tangga" width="600" height="400">
      </a>
      <div class="desc">Standard Bed Room</div>
    </div>
  </div>


  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="images/room6.jpg">
        <img src="images/room6.jpg" alt="Telur" width="600" height="400">
      </a>
      <div class="desc">Play Ground</div>
    </div>
  </div>

  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="images/rooom20.jpg">
        <img src="images/rooom20.jpg" alt="Hexa Miring" width="600" height="400">
      </a>
      <div class="desc">Premium Bed Room</div>
    </div>
  </div>

  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="images/room14.jpg">
        <img src="images/room14.jpg" alt="Hexa Tegak" width="600" height="400">
      </a>
      <div class="desc">Deluxe Bed Room</div>
    </div>
  </div>

  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="images/room19.jpg">
        <img src="images/room19.jpg" alt="Hexa Tegak" width="600" height="400">
      </a>
      <div class="desc">Restaurant</div>
    </div>
  </div>
  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="images/roomtamu.jpg">
        <img src="images/roomtamu.jpg" alt="Hexa Tegak" width="600" height="400">
      </a>
      <div class="desc">Living Room</div>
    </div>
  </div>
  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="images/room7.jpg">
        <img src="images/room7.jpg" alt="Hexa Tegak" width="600" height="400">
      </a>
      <div class="desc">Play Ground</div>
    </div>
  </div>
  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="images/roomtamu.jpg">
        <img src="images/room5.jpg" alt="Hexa Tegak" width="600" height="400">
      </a>
      <div class="desc">Premium Bed Room</div>
    </div>
  </div>

  <div class="clearfix"></div>
  <br>
  <br>
  <div id="footer">
    <div id="text">
      <p style="text-align:center;">Copyright &copy 2021 Mercure Hotel</p>
    </div>
  </div>

  </body>

</html>