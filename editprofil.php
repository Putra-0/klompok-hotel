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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <!-- APP CSS -->
    <link rel="stylesheet" href="./css/grid.css">
    <link rel="stylesheet" href="./css/app.css">
    <link rel="stylesheet" href="css/add.css">
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
            <button class="btn btn-outline">
                <i class='bx bx-log-out bx-flip-horizontal'></i>
            </button>
        </div>
        <!-- SIDEBAR MENU -->
        <ul class="sidebar-menu">
            <li>
                <a href="index.php" class="active">
                    <i class='bx bx-category'></i>
                    <span>All Booking</span>
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
                            Payment Status
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
                        <a href="editprofil.php" class="active">
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
                <img src="images/user-image-2.png" style="width: 100px;" class="rounded mx-auto d-block" alt="">
                <br>
                <div class="row">
                    <div class="col-md-12 d-flex justify-content-center">
                        <form class="needs-validation" method="post">
                            <?php foreach ($cust as $row) : ?>
                                <input type="hidden" name="id_customer" value="">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="email">Email</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="email" value="<?php echo $row['email'] ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="name">Name</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="name" value="<?php echo $row['nama'] ?>" required>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>
                            <div class="row">
                                <div class="col-md-7 mb-3">
                                    <label for="state">NIK</label>
                                    <input type="text" class="form-control" id="nik" name="nik" value="<?php echo $row['no_identitas'] ?>" required>
                                </div>
                                <div class="col-md-5 mb-3">
                                    <label for="state">No. HP</label>
                                    <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?php echo $row['no_telp'] ?>" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-7">
                                    <input type="text" class="form-control" placeholder="City">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="State">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Zip">
                                </div>
                            </div>

                            <hr class="mb-4">
                            <button class="btn btn-lg btn-block btn-primary" type="submit" name="save" id="save">Save</button>
                        </form>
                    </div>
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
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
    <!-- APEX CHART -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <!-- APP JS -->
    <script src="./js/app.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</body>

</html>