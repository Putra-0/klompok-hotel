<?php

session_start();
if (!isset($_SESSION["login"])) {
    header("Location: form-sign.php");
    exit;
}

include 'koneksi.php';
$as = $_SESSION["email"];
$cust = query("SELECT * FROM tb_customer where email = '$as'");
$room = query("SELECT * FROM tb_room");
$available = query("SELECT SUM(available) AS total_available FROM tb_room WHERE available");
$booked = query("SELECT SUM(booked) AS total_booked FROM tb_room WHERE booked");

?>
<!DOCTYPE html> 
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Mercury</title>
    <link rel="icon" href="images/logo-m.png">
    <link rel="shortcut icon" href="/images/logo-mb.png" type="image/png">
    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- BOXICONS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- APP CSS -->
    <link rel="stylesheet" href="./css/grid.css">
    <link rel="stylesheet" href="./css/app.css">
    <!-- Font Awesome -->
</head>

<body>

    <!-- SIDEBAR -->
    <div class="sidebar">
        <div class="sidebar-logo">
            <img src="./images/logo-company.png" alt="Comapny logo">
            <div class="sidebar-close" id="sidebar-close">
                <i class='bx bx-left-arrow-alt'></i>
            </div>
        </div>
        <div class="sidebar-user">
            <div class="sidebar-user-info">
                <img src="./images/user-image-2.png" alt="User picture" class="profile-image">
                <div class="sidebar-user-name">
                    <?php foreach ($cust as $row) :
                        echo $row['nama']; ?>
                    <?php endforeach ?>
                </div>
            </div>
            <a href="logout.php">
                <button class="btn btn-outline">
                    <i class='bx bx-log-out bx-flip-horizontal'></i>
                </button>
            </a>
        </div>
        <!-- SIDEBAR MENU -->
        <ul class="sidebar-menu">
            <li>
                <a href="dashboard.php" class="active">
                    <i class='bx bx-category'></i>
                    <span>dashboard</span>
                </a>
            </li>
            <li class="sidebar-submenu">
                <a href="#" class="sidebar-menu-dropdown">
                    <i class='bx bx-calendar'></i>
                    <span>Bookings</span>
                    <div class="dropdown-icon"></div>
                </a>
                <ul class="sidebar-menu sidebar-menu-dropdown-content">
                    <li>
                        <a href="allbook.php">
                            All Booking
                        </a>
                    </li>
                    <li>
                        <a href="addbook.php">
                            Add Booking
                        </a>
                    </li>
                    <li>
                        <a href="payment.php">
                            Payment History
                        </a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-submenu">
                <a href="#" class="sidebar-menu-dropdown">
                    <i class='bx bx-bed'></i>
                    <span>Rooms</span>
                    <div class="dropdown-icon"></div>
                </a>
                <ul class="sidebar-menu sidebar-menu-dropdown-content">
                    <li>
                        <a href="roomtype.php">
                            Room Type
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-mail-send'></i>
                    <span>mail</span>
                </a>
            </li>
            <li class="sidebar-submenu">
                <a href="#" class="sidebar-menu-dropdown">
                    <i class='bx bx-user-circle'></i>
                    <span>account</span>
                    <div class="dropdown-icon"></div>
                </a>
                <ul class="sidebar-menu sidebar-menu-dropdown-content">
                    <li>
                        <a href="editprofil.php">
                            edit profile
                        </a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-submenu">
                <a href="#" class="sidebar-menu-dropdown">
                    <i class='bx bx-cog'></i>
                    <span>settings</span>
                    <div class="dropdown-icon"></div>
                </a>
                <ul class="sidebar-menu sidebar-menu-dropdown-content">
                    <li>
                        <a href="#" class="darkmode-toggle" id="darkmode-toggle">
                            darkmode
                            <span class="darkmode-switch"></span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->

    <!-- MAIN CONTENT -->
    <div class="main">
        <div class="main-header">
            <div class="mobile-toggle" id="mobile-toggle">
                <i class='bx bx-menu-alt-right'></i>
            </div>
            <div class="main-title">
                dashboard
            </div>
        </div>
        <div class="main-content">
            <div class="row">
                <div class="col-3 col-md-4 col-sm-12">
                    <div class="box box-hover">
                        <!-- COUNTER -->
                        <div class="counter">
                            <div class="counter-title">
                                Room Booked
                            </div>
                            <div class="counter-info">
                                <div class="counter-count">
                                    <?php foreach ($booked as $r) :
                                        echo $r['total_booked'] ?>
                                    <?php endforeach ?>
                                </div>
                                <i class='bx bxs-calculator'></i>
                            </div>
                        </div>
                        <!-- END COUNTER -->
                    </div>
                </div>
                <div class="col-3 col-md-4 col-sm-12">
                    <div class="box box-hover">
                        <!-- COUNTER -->
                        <div class="counter">
                            <div class="counter-title">
                                Room Available
                            </div>
                            <div class="counter-info">
                                <div class="counter-count">
                                    <?php foreach ($available as $r) :
                                        echo $r['total_available'] ?>
                                    <?php endforeach ?>
                                </div>
                                <i class='bx bx-news'></i>
                            </div>
                        </div>
                        <!-- END COUNTER -->
                    </div>
                </div>
                <div class="col-3 col-md-4 col-sm-12">
                    <div class="box box-hover">
                        <!-- COUNTER -->
                        <div class="counter">
                            <div class="counter-title">
                                Expenses
                            </div>
                            <div class="counter-info">
                                <div class="counter-count">
                                    $9,780
                                </div>
                                <i class='bx bx-line-chart'></i>
                            </div>
                        </div>
                        <!-- END COUNTER -->
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-5 col-md-7 col-sm-12">
                    <!-- ROOMS CHART -->
                    <div class="box f-height">
                        <div class="box-header">
                            Top Selected Room
                        </div>
                        <div class="box-body">
                            <div id="customer-chart"></div>
                        </div>
                    </div>
                    <!-- END ROOMS CHART -->
                </div>
                <div class="col-4 col-md-5 col-sm-12">
                    <!-- CATEGORY CHART -->
                    <div class="box f-height">
                        <div class="box-header">
                            Room Booked
                        </div>
                        <div class="box-body">
                            <div id="category-chart"></div>
                        </div>
                    </div>
                    <!-- END CATEGORY CHART -->
                </div>
            </div>
        </div>
    </div>

    <!--FOOTER-->
    <div class="footer">
        <div class="footer-main">
            © 2020 Copyright <a class="text-white" href="https://github.com/Putra-0">Adi Putra</a>
        </div>
    </div>
    <div class="overlay"></div>

    <!-- SCRIPT -->
    <!-- APEX CHART -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <!-- APP JS -->
    <script src="./js/app.js"></script>

</body>

</html>