<?php

session_start();
if (!isset($_SESSION["login"])) {
    header("Location: form-sign.php");
    exit;
    
}
?> 
<?php include 'sendemail.php'; ?>
<html>
<head>
    <title>Contact Us</title>
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
    .main {
            width: 35%;
            margin: 2.5em auto;
            background: #FFFFFF;
            padding: 2.5em;
        }

        .contactFrm h4 {
            font-size: 1em;
            margin-bottom: 0.5em;
            font-weight: 300;
            letter-spacing: 5px;
            color:black;
        }

        .contactFrm input[type="text"],
        .contactFrm input[type="email"] {
            width: 70%;
            outline: none;
            font-size: 0.9em;
            padding: .7em 1em;
            border: 1px solid #000;
            -webkit-appearance: none;
            display: block;
            margin-bottom: 1.2em;
            
        }

        .contactFrm textarea {
            resize: none;
            width: 93.5%;
            font-size: 0.9em;
            outline: none;
            padding: .6em 1em;
            border: 1px solid #000;
            min-height: 10em;
            -webkit-appearance: none;
            background: #ffffff;
        }

        .contactFrm input[type="submit"] {
            outline: none;
            color: #FFFFFF;
            padding: 0.5em 0;
            font-size: 1em;
            margin: 1em 0 0 0;
            -webkit-appearance: none;
            background: #006faa;
            transition: 0.5s all;
            border: 2px solid #006faa;
            -webkit-transition: 0.5s all;
            transition: 0.5s all;
            -moz-transition: 0.5s all;
            width: 30%;
            cursor: pointer;
            text-align: center;
        }

        .contactFrm input[type="submit"]:hover {
            background: none;
            color: #006faa;
        }

        #footer {
            height: 90px;
        }

        #footer #text {
            color: #fff;
            padding: 10px;
            font-size: 15pt;
            text-shadow: #000 1px 1px 2px;
            text-align: center;
        }
    </style>
</head>
<div class="header-top-nav">
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="Gallery.php">Gallery</a></li>
        <li><a href="about.php">About</a></li>
        <li class="active"><a href="Contact.php">Contact</a></li>
        <li><a href="SignUp.html">Sign Up | Sign In </a></li>
        <div class="clear"> </div>
    </ul>  
</div>
</div>
</div>
 
<body>
<!---------alert message start--->
<?php echo $alert; ?> 
    <!----alert message end--->
<div class="content">
	<div class="quit">
		<p><span class="start">Future </span> Reservation <span class="end">Contact US</span></p>
	</div>
    <div class="main">
        <h2>Send Me Message</h2>
        <br>
        <div class="contactFrm">
            <form action="" method="post">
                <h4>Name</h4>
                <input type="text" name="name" placeholder="Masukan Nama Anda" required="">
                <h4>Email </h4>
                <input type="email" name="email" placeholder="Masukan Email" required="">
                <h4>Message</h4> 
                <textarea name="message" placeholder="Tulis pesan Anda disini" required=""> </textarea>
                <input type="submit" name="submit" value="Submit">
                <div class="clear"> </div>
            </form>
        </div>
    </div>
    <br>
    <br>
    <br>
    <div id="footer">
        <div id="text">
            <p>Copyright &copy 2021 Mercure Hotel</p>
        </div>
    </div>
<script type="text/javascript">
    if(window.history.replaceState){
        window.history.replaceState(null, null, window.location.href);
    }
     
</body>

</html>