<?php

session_start();
if (!isset($_SESSION["login"])) {
    header("Location: form-sign.php");
    exit;
}

include 'koneksi.php';
$as = $_SESSION["email"];
$cust = query("SELECT * FROM tb_customer where email = '$as'");

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <!-- APP CSS -->
    <link rel="stylesheet" href="./css/grid.css">
    <link rel="stylesheet" href="./css/app.css">
    <link rel="stylesheet" href="css/add.css">
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
                Booking
            </div>
        </div>
        <div class="main-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 order-md-2 mb-4">
                        <h4 class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-muted">Your cart</span>
                        </h4>
                        <ul class="list-group mb-3 sticky-top">
                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div>
                                    <h6 class="my-0" id="select_room"></h6>
                                    <hr class="px-5">
                                    <small class="text-muted">Bed Type : &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</small><small class="text-muted" id="select_bed"></small> <br>
                                    <small class="text-muted">Rooms&emsp;: &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</small><small class="text-muted" id="jum_room"></small><br>
                                    <small class="text-muted">Adult &emsp;&nbsp; : &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</small><small class="text-muted" id="select_adult"></small><br>
                                    <small class="text-muted">Children&ensp;: &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</small><small class="text-muted" id="select_children"></small><br>
                                    <small class="text-muted">Duration&ensp;: &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</small><small class="text-muted" id="select_duration"></small>
                                </div>
                                <span class="text-muted" id="price_room"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Total (Rupiah)</span>
                                <strong>[harga]</strong>
                            </li>
                        </ul>
                        <form class="card p-2">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Promo code">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-secondary">Redeem</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-8 order-md-1">
                        <form class="needs-validation" method="post">
                            <input type="hidden" name="id_customer" value="">
                            <div class="row">
                                <div class="col-md-10 mb-3">
                                    <label for="name">Name</label>
                                    <div class="input-group">
                                        <?php foreach ($cust as $row) : ?>
                                            <input type="text" class="form-control" id="name" value="<?php echo $row['nama'] ?>" readonly>
                                        <?php endforeach ?>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2 mb-3">
                                    <label for="room-type">Room Type</label>
                                    <select class="custom-select d-block w-100" id="room-type" name="room-type" required="">
                                        <option selected data-price="" value="">Choose...</option>
                                        <option data-price="Rp 100000" value="roomA">Standard Room</option>
                                        <option data-price="Rp 130000" value="roomB">Premium Room</option>
                                        <option data-price="Rp 130000" value="roomC">Deluxe Room</option>
                                    </select>
                                </div>
                                <div class="col-md-2 mb-3">
                                    <label for="room-type">Bed</label>
                                    <select class="custom-select d-block w-100" id="bed-type" name="bed-type" required="">
                                        <option selected value="">Choose...</option>
                                        <option value="Single Bed">single</option>
                                        <option value="B">Big Bed</option>
                                        <option value="C">Huge Bed</option> 
                                    </select>
                                </div>
                                <div class="col-md-2 mb-3">
                                    <label for="state">Rooms</label>
                                    <input type="number" class="form-control" id="rooms" name="rooms" required>
                                </div>
                                <div class="col-md-2 mb-3">
                                    <label for="state">Adult</label>
                                    <input type="number" class="form-control" id="adult" name="adult" required>
                                </div>
                                <div class="col-md-2 mb-3">
                                    <label for="state">Children</label>
                                    <input type="number" class="form-control" id="children" name="children" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5 mb-3">
                                    <label for="date1">Check In</label>
                                    <input type="date" class="form-control" id="date1" name="date1" required>
                                </div>
                                <div class="col-md-5 mb-3">
                                    <label for="date2">Check Out</label>
                                    <input type="date" class="form-control" id="date2" name="date2" required>
                                </div>
                            </div>

                            <hr class="mb-4">
                            <button class="btn btn-outline-primary btn-lg btn-block" type="submit" name="booking" id="booking" onClick='top.location="payment.php"'>Continue to Payment</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="min-height: 70px;">

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(' #room-type').on('change', function() {
            const selectedPackage = $('#room-type').val();
            const price = $('#room-type option:selected').data('price');
            $('#price_room').text(price);
            $('#select_room').text(selectedPackage);
        });
        $('#bed-type').on('change', function() {
            const selectedPackage = $('#bed-type').val();
            $('#select_bed').text(selectedPackage);
        });
        $('#rooms').on('change', function() {
            const selectedPackage = $('#rooms').val();
            $('#jum_room').text(selectedPackage);
        });
        $('#adult').on('change', function() {
            const selectedPackage = $('#adult').val();
            $('#select_adult').text(selectedPackage);
        });
        $('#adult').on('change', function() {
            const selectedPackage = $('#adult').val();
            $('#select_adult').text(selectedPackage);
        });
        $('#children').on('change', function() {
            const selectedPackage = $('#children').val();
            $('#select_children').text(selectedPackage);
        });
        $('#date2').on('change', function() {
            const date1 = $('#date1').val();
            const date2 = $('#date2').val();
            const minute = 1000 * 60;
            const hour = minute * 60;
            const day = hour * 24;
            const startDay = new Date(date1);
            const endDay = new Date(date2);
            let days1 = Math.round(startDay.getTime() / day);
            let days2 = Math.round(endDay.getTime() / day);
            var tot = days2 - days1;
            $('#select_duration').text(tot + ' Days');
        });
    </script>
</body>

</html>