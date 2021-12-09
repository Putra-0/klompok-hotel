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
    <p><span class="start">Future </span> Reservation <span class="end">Gallery Standard Rooms</span></p>
  </div>
  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="images/room12.jpg">
        <img src="images/room12.jpg" alt="Tangga" width="600" height="400">
      </a>
      <div class="desc">Standard Bed Room</div>
    </div>
  </div>


  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="images/fasilitas1.jpg">
        <img src="images/fasilitas1.jpg" alt="Telur" width="600" height="400">
      </a>
      <div class="desc">Televesion in room</div>
    </div>
  </div>

  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="images/acroom2_2.jpg">
        <img src="images/acroom2_2.jpg" alt="Hexa Miring" width="600" height="400">
      </a>
      <div class="desc">Ac room</div>
    </div>
  </div>

  <div class="responsive"> 
    <div class="gallery">
      <a target="_blank" href="images/bathroom4.jpg">
        <img src="images/bathroom4.jpg" alt="Hexa Tegak" width="600" height="400">
      </a>
      <div class="desc">Bathroom</div>
    </div>
  </div>
  
  <div class="clearfix"></div>
  <br>
  <div class="content">
  <div class="quit">
    <br>
    <br>
    <p><span class="start">Future </span> Reservation <span class="end">Gallery Premium Rooms</span></p>
  </div>


  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="images/room9.jpg">
        <img src="images/room9.jpg" alt="Hexa Tegak" width="600" height="400">
      </a>
      <div class="desc">Premium Bed Room</div>
    </div>
  </div>
  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="images/fasilitas6_1.jpg">
        <img src="images/fasilitas6_1.jpg" alt="Hexa Tegak" width="600" height="400">
      </a>
      <div class="desc">Television in room</div>
    </div>
  </div>
  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="images/acroom3_4.jpg">
        <img src="images/acroom3_4.jpg" alt="Hexa Tegak" width="600" height="400"> 
      </a>
      <div class="desc">Ac room</div>
    </div>
  </div>
  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="images/bathroom9_1.jpg">
        <img src="images/bathroom9_1.jpg" alt="Hexa Tegak" width="600" height="400">
      </a>
      <div class="desc">Bathroom</div>
    </div>
  </div>
 
  
  <div class="clearfix"></div>
  <nr>
  <div class="content">
  <div class="quit">
    <br>
    <br> 
    <p><span class="start">Future </span> Reservation <span class="end">Gallery Deluxe Rooms</span></p>
  </div>
  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="images/room5.jpg">
        <img src="images/room5.jpg" alt="Hexa Tegak" width="600" height="400">
      </a>
      <div class="desc">Deluxe Bed Room</div>
    </div>
  </div>
  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="images/fasilitas3.jpg">
        <img src="images/fasilitas3.jpg" alt="Hexa Tegak" width="600" height="400">
      </a>
      <div class="desc">Television and sofa in living room</div>
    </div>
  </div>
  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="images/acroom4_4.jpg">
        <img src="images/acroom4_4.jpg" alt="Hexa Tegak" width="600" height="400">
      </a>
      <div class="desc">Ac room in living room and Bed room</div>
    </div>
  </div>
  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="images/bathroom8_4.jpg">
        <img src="images/bathroom8_4.jpg" alt="Hexa Tegak" width="600" height="400">
      </a>
      <div class="desc">Bathroom</div>
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