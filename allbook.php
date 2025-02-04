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
    <!-- APP CSS -->
    <link rel="stylesheet" href="./css/grid.css">
    <link rel="stylesheet" href="./css/app.css">
    <script src="datatable/jquery-3.5.1.js"></script>
    <script src="datatable/jquery.dataTables.min.js"></script>
    <link href="datatable/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet" />

    <link href="css/design1.css" rel="stylesheet" />
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
                <a href="dashboard.php">
                    <i class='bx bx-category'></i>
                    <span>Dashboard</span>
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
                        <a href="allbook.php" class="active">
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
                All Booking
            </div>
        </div>
        <div class="main-content">
            <div class="row">
                <div class="col-12">
                    <div class="container">
                        <div id="formContent">
                            <h2>Customer Info</h2>
                            <hr />
                            <table id="tblCustomer" class="display" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Company</th>
                                        <th scope="col">Relationship</th>
                                        <th scope="col">City</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Sven Ottlieb</td>
                                        <td>Drachenblut Delikatessen</td>
                                        <td>Customers</td>
                                        <td>Aachen</td>
                                    </tr>
                                    <tr>
                                        <td>Paula Wilson</td>
                                        <td>Rattlesnake Canyon Grocery</td>
                                        <td>Customers</td>
                                        <td>Albuquerque</td>
                                    </tr>
                                    <tr>
                                        <td>Rene Phillips</td>
                                        <td>Old World Delicatessen</td>
                                        <td>Customers</td>
                                        <td>Anchorage</td>
                                    </tr>
                                    <tr>
                                        <td>Regina Murphy</td>
                                        <td>Grandma Kelly&#39;s Homestead</td>
                                        <td>Suppliers</td>
                                        <td>Ann Arbor</td>
                                    </tr>
                                    <tr>
                                        <td>Eliane Noz</td>
                                        <td>Gai p&#226;turage</td>
                                        <td>Suppliers</td>
                                        <td>Annecy</td>
                                    </tr>
                                    <tr>
                                        <td>Palle Ibsen</td>
                                        <td>Vaffeljernet</td>
                                        <td>Customers</td>
                                        <td>&#197;rhus</td>
                                    </tr>
                                    <tr>
                                        <td>Eduardo Saavedra</td>
                                        <td>Galer&#237;a del gastr&#243;nomo</td>
                                        <td>Customers</td>
                                        <td>Barcelona</td>
                                    </tr>
                                    <tr>
                                        <td>Carlos Gonz&#225;lez</td>
                                        <td>LILA-Supermercado</td>
                                        <td>Customers</td>
                                        <td>Barquisimeto</td>
                                    </tr>
                                    <tr>
                                        <td>Cheryl Saylor</td>
                                        <td>Bigfoot Breweries</td>
                                        <td>Suppliers</td>
                                        <td>Bend</td>
                                    </tr>
                                    <tr>
                                        <td>Giovanni Rovelli</td>
                                        <td>Magazzini Alimentari Riuniti</td>
                                        <td>Customers</td>
                                        <td>Bergamo</td>
                                    </tr>
                                    <tr>
                                        <td>Maria Anders</td>
                                        <td>Alfreds Futterkiste</td>
                                        <td>Customers</td>
                                        <td>Berlin</td>
                                    </tr>
                                    <tr>
                                        <td>Petra Winkler</td>
                                        <td>Heli S&#252;&#223;waren GmbH &amp; Co. KG</td>
                                        <td>Suppliers</td>
                                        <td>Berlin</td>
                                    </tr>
                                    <tr>
                                        <td>Yang Wang</td>
                                        <td>Chop-suey Chinese</td>
                                        <td>Customers</td>
                                        <td>Bern</td>
                                    </tr>
                                    <tr>
                                        <td>Jose Pavarotti</td>
                                        <td>Save-a-lot Markets</td>
                                        <td>Customers</td>
                                        <td>Boise</td>
                                    </tr>
                                    <tr>
                                        <td>Robb Merchant</td>
                                        <td>New England Seafood Cannery</td>
                                        <td>Suppliers</td>
                                        <td>Boston</td>
                                    </tr>
                                    <tr>
                                        <td>Maria Larsson</td>
                                        <td>Folk och f&#228; HB</td>
                                        <td>Customers</td>
                                        <td>Br&#228;cke</td>
                                    </tr>
                                    <tr>
                                        <td>Philip Cramer</td>
                                        <td>K&#246;niglich Essen</td>
                                        <td>Customers</td>
                                        <td>Brandenburg</td>
                                    </tr>
                                    <tr>
                                        <td>Catherine Dewey</td>
                                        <td>Maison Dewey</td>
                                        <td>Customers</td>
                                        <td>Bruxelles</td>
                                    </tr>
                                    <tr>
                                        <td>Patricio Simpson</td>
                                        <td>Cactus Comidas para llevar</td>
                                        <td>Customers</td>
                                        <td>Buenos Aires</td>
                                    </tr>
                                    <tr>
                                        <td>Yvonne Moncada</td>
                                        <td>Oc&#233;ano Atl&#225;ntico Ltda.</td>
                                        <td>Customers</td>
                                        <td>Buenos Aires</td>
                                    </tr>
                                    <tr>
                                        <td>Sergio Guti&#233;rrez</td>
                                        <td>Rancho grande</td>
                                        <td>Customers</td>
                                        <td>Buenos Aires</td>
                                    </tr>
                                    <tr>
                                        <td>Liu Wong</td>
                                        <td>The Cracker Box</td>
                                        <td>Customers</td>
                                        <td>Butte</td>
                                    </tr>
                                    <tr>
                                        <td>Andr&#233; Fonseca</td>
                                        <td>Gourmet Lanchonetes</td>
                                        <td>Customers</td>
                                        <td>Campinas</td>
                                    </tr>
                                    <tr>
                                        <td>Manuel Pereira</td>
                                        <td>GROSELLA-Restaurante</td>
                                        <td>Customers</td>
                                        <td>Caracas</td>
                                    </tr>
                                    <tr>
                                        <td>Pascale Cartrain</td>
                                        <td>Supr&#234;mes d&#233;lices</td>
                                        <td>Customers</td>
                                        <td>Charleroi</td>
                                    </tr>
                                    <tr>
                                        <td>Patricia McKenna</td>
                                        <td>Hungry Owl All-Night Grocers</td>
                                        <td>Customers</td>
                                        <td>Cork</td>
                                    </tr>
                                    <tr>
                                        <td>Helen Bennett</td>
                                        <td>Island Trading</td>
                                        <td>Customers</td>
                                        <td>Cowes</td>
                                    </tr>
                                    <tr>
                                        <td>Horst Kloss</td>
                                        <td>QUICK-Stop</td>
                                        <td>Customers</td>
                                        <td>Cunewalde</td>
                                    </tr>
                                    <tr>
                                        <td>Sven Petersen</td>
                                        <td>Nord-Ost-Fisch Handelsgesellschaft mbH</td>
                                        <td>Suppliers</td>
                                        <td>Cuxhaven</td>
                                    </tr>
                                    <tr>
                                        <td>Yoshi Latimer</td>
                                        <td>Hungry Coyote Import Store</td>
                                        <td>Customers</td>
                                        <td>Elgin</td>
                                    </tr>
                                    <tr>
                                        <td>Howard Snyder</td>
                                        <td>Great Lakes Food Market</td>
                                        <td>Customers</td>
                                        <td>Eugene</td>
                                    </tr>
                                    <tr>
                                        <td>Martin Bein</td>
                                        <td>Plutzer Lebensmittelgro&#223;m&#228;rkte AG</td>
                                        <td>Suppliers</td>
                                        <td>Frankfurt</td>
                                    </tr>
                                    <tr>
                                        <td>Renate Messner</td>
                                        <td>Lehmanns Marktstand</td>
                                        <td>Customers</td>
                                        <td>Frankfurt a.M.</td>
                                    </tr>
                                    <tr>
                                        <td>Michael Holz</td>
                                        <td>Richter Supermarkt</td>
                                        <td>Customers</td>
                                        <td>Gen&#232;ve</td>
                                    </tr>
                                    <tr>
                                        <td>Lars Peterson</td>
                                        <td>PB Kn&#228;ckebr&#246;d AB</td>
                                        <td>Suppliers</td>
                                        <td>G&#246;teborg</td>
                                    </tr>
                                    <tr>
                                        <td>Roland Mendel</td>
                                        <td>Ernst Handel</td>
                                        <td>Customers</td>
                                        <td>Graz</td>
                                    </tr>
                                    <tr>
                                        <td>Matti Karttunen</td>
                                        <td>Wilman Kala</td>
                                        <td>Customers</td>
                                        <td>Helsinki</td>
                                    </tr>
                                    <tr>
                                        <td>Felipe Izquierdo</td>
                                        <td>LINO-Delicateses</td>
                                        <td>Customers</td>
                                        <td>I. de Margarita</td>
                                    </tr>
                                    <tr>
                                        <td>Helvetius Nagy</td>
                                        <td>Trail&#39;s Head Gourmet Provisioners</td>
                                        <td>Customers</td>
                                        <td>Kirkland</td>
                                    </tr>
                                    <tr>
                                        <td>Jytte Petersen</td>
                                        <td>Simons bistro</td>
                                        <td>Customers</td>
                                        <td>Kobenhavn</td>
                                    </tr>
                                    <tr>
                                        <td>Henriette Pfalzheim</td>
                                        <td>Ottilies K&#228;seladen</td>
                                        <td>Customers</td>
                                        <td>K&#246;ln</td>
                                    </tr>
                                    <tr>
                                        <td>Art Braunschweiger</td>
                                        <td>Split Rail Beer &amp; Ale</td>
                                        <td>Customers</td>
                                        <td>Lander</td>
                                    </tr>
                                    <tr>
                                        <td>Anne Heikkonen</td>
                                        <td>Karkki Oy</td>
                                        <td>Suppliers</td>
                                        <td>Lappeenranta</td>
                                    </tr>
                                    <tr>
                                        <td>Alexander Feuer</td>
                                        <td>Morgenstern Gesundkost</td>
                                        <td>Customers</td>
                                        <td>Leipzig</td>
                                    </tr>
                                    <tr>
                                        <td>Martine Ranc&#233;</td>
                                        <td>Folies gourmandes</td>
                                        <td>Customers</td>
                                        <td>Lille</td>
                                    </tr>
                                    <tr>
                                        <td>Lino Rodriguez</td>
                                        <td>Furia Bacalhau e Frutos do Mar</td>
                                        <td>Customers</td>
                                        <td>Lisboa</td>
                                    </tr>
                                    <tr>
                                        <td>Isabel de Castro</td>
                                        <td>Princesa Isabel Vinhos</td>
                                        <td>Customers</td>
                                        <td>Lisboa</td>
                                    </tr>
                                    <tr>
                                        <td>Thomas Hardy</td>
                                        <td>Around the Horn</td>
                                        <td>Customers</td>
                                        <td>London</td>
                                    </tr>
                                    <tr>
                                        <td>Victoria Ashworth</td>
                                        <td>B&#39;s Beverages</td>
                                        <td>Customers</td>
                                        <td>London</td>
                                    </tr>
                                    <tr>
                                        <td>Elizabeth Brown</td>
                                        <td>Consolidated Holdings</td>
                                        <td>Customers</td>
                                        <td>London</td>
                                    </tr>
                                    <tr>
                                        <td>Ann Devon</td>
                                        <td>Eastern Connection</td>
                                        <td>Customers</td>
                                        <td>London</td>
                                    </tr>
                                    <tr>
                                        <td>Charlotte Cooper</td>
                                        <td>Exotic Liquids</td>
                                        <td>Suppliers</td>
                                        <td>London</td>
                                    </tr>
                                    <tr>
                                        <td>Simon Crowther</td>
                                        <td>North/South</td>
                                        <td>Customers</td>
                                        <td>London</td>
                                    </tr>
                                    <tr>
                                        <td>Hari Kumar</td>
                                        <td>Seven Seas Imports</td>
                                        <td>Customers</td>
                                        <td>London</td>
                                    </tr>
                                    <tr>
                                        <td>Christina Berglund</td>
                                        <td>Berglunds snabbk&#246;p</td>
                                        <td>Customers</td>
                                        <td>Lule&#229;</td>
                                    </tr>
                                    <tr>
                                        <td>Niels Petersen</td>
                                        <td>Lyngbysild</td>
                                        <td>Suppliers</td>
                                        <td>Lyngby</td>
                                    </tr>
                                    <tr>
                                        <td>Mary Saveley</td>
                                        <td>Victuailles en stock</td>
                                        <td>Customers</td>
                                        <td>Lyon</td>
                                    </tr>
                                    <tr>
                                        <td>Mart&#237;n Sommer</td>
                                        <td>B&#243;lido Comidas preparadas</td>
                                        <td>Customers</td>
                                        <td>Madrid</td>
                                    </tr>
                                    <tr>
                                        <td>Diego Roel</td>
                                        <td>FISSA Fabrica Inter. Salchichas S.A.</td>
                                        <td>Customers</td>
                                        <td>Madrid</td>
                                    </tr>
                                    <tr>
                                        <td>Alejandra Camino</td>
                                        <td>Romero y tomillo</td>
                                        <td>Customers</td>
                                        <td>Madrid</td>
                                    </tr>
                                    <tr>
                                        <td>Peter Wilson</td>
                                        <td>Specialty Biscuits, Ltd.</td>
                                        <td>Suppliers</td>
                                        <td>Manchester</td>
                                    </tr>
                                    <tr>
                                        <td>Hanna Moos</td>
                                        <td>Blauer See Delikatessen</td>
                                        <td>Customers</td>
                                        <td>Mannheim</td>
                                    </tr>
                                    <tr>
                                        <td>Laurence Lebihan</td>
                                        <td>Bon app&#39;</td>
                                        <td>Customers</td>
                                        <td>Marseille</td>
                                    </tr>
                                    <tr>
                                        <td>Ian Devling</td>
                                        <td>Pavlova, Ltd.</td>
                                        <td>Suppliers</td>
                                        <td>Melbourne</td>
                                    </tr>
                                    <tr>
                                        <td>Ana Trujillo</td>
                                        <td>Ana Trujillo Emparedados y helados</td>
                                        <td>Customers</td>
                                        <td>M&#233;xico D.F.</td>
                                    </tr>
                                    <tr>
                                        <td>Antonio Moreno</td>
                                        <td>Antonio Moreno Taquer&#237;a</td>
                                        <td>Customers</td>
                                        <td>M&#233;xico D.F.</td>
                                    </tr>
                                    <tr>
                                        <td>Francisco Chang</td>
                                        <td>Centro comercial Moctezuma</td>
                                        <td>Customers</td>
                                        <td>M&#233;xico D.F.</td>
                                    </tr>
                                    <tr>
                                        <td>Guillermo Fern&#225;ndez</td>
                                        <td>Pericles Comidas cl&#225;sicas</td>
                                        <td>Customers</td>
                                        <td>M&#233;xico D.F.</td>
                                    </tr>
                                    <tr>
                                        <td>Miguel Angel Paolino</td>
                                        <td>Tortuga Restaurante</td>
                                        <td>Customers</td>
                                        <td>M&#233;xico D.F.</td>
                                    </tr>
                                    <tr>
                                        <td>Marie Delamare</td>
                                        <td>Escargots Nouveaux</td>
                                        <td>Suppliers</td>
                                        <td>Montceau</td>
                                    </tr>
                                    <tr>
                                        <td>Jean-Guy Lauzon</td>
                                        <td>Ma Maison</td>
                                        <td>Suppliers</td>
                                        <td>Montr&#233;al</td>
                                    </tr>
                                    <tr>
                                        <td>Jean Fresni&#232;re</td>
                                        <td>M&#232;re Paillarde</td>
                                        <td>Customers</td>
                                        <td>Montr&#233;al</td>
                                    </tr>
                                    <tr>
                                        <td>Peter Franken</td>
                                        <td>Frankenversand</td>
                                        <td>Customers</td>
                                        <td>M&#252;nchen</td>
                                    </tr>
                                    <tr>
                                        <td>Karin Josephs</td>
                                        <td>Toms Spezialit&#228;ten</td>
                                        <td>Customers</td>
                                        <td>M&#252;nster</td>
                                    </tr>
                                    <tr>
                                        <td>Janine Labrune</td>
                                        <td>Du monde entier</td>
                                        <td>Customers</td>
                                        <td>Nantes</td>
                                    </tr>
                                    <tr>
                                        <td>Carine Schmitt</td>
                                        <td>France restauration</td>
                                        <td>Customers</td>
                                        <td>Nantes</td>
                                    </tr>
                                    <tr>
                                        <td>Shelley Burke</td>
                                        <td>New Orleans Cajun Delights</td>
                                        <td>Suppliers</td>
                                        <td>New Orleans</td>
                                    </tr>
                                    <tr>
                                        <td>Mayumi Ohno</td>
                                        <td>Mayumi&#39;s</td>
                                        <td>Suppliers</td>
                                        <td>Osaka</td>
                                    </tr>
                                    <tr>
                                        <td>Pirkko Koskitalo</td>
                                        <td>Wartian Herkku</td>
                                        <td>Customers</td>
                                        <td>Oulu</td>
                                    </tr>
                                    <tr>
                                        <td>Antonio del Valle Saavedra</td>
                                        <td>Cooperativa de Quesos &#39;Las Cabras&#39;</td>
                                        <td>Suppliers</td>
                                        <td>Oviedo</td>
                                    </tr>
                                    <tr>
                                        <td>Guyl&#232;ne Nodier</td>
                                        <td>Aux joyeux eccl&#233;siastiques</td>
                                        <td>Suppliers</td>
                                        <td>Paris</td>
                                    </tr>
                                    <tr>
                                        <td>Marie Bertrand</td>
                                        <td>Paris sp&#233;cialit&#233;s</td>
                                        <td>Customers</td>
                                        <td>Paris</td>
                                    </tr>
                                    <tr>
                                        <td>Dominique Perrier</td>
                                        <td>Sp&#233;cialit&#233;s du monde</td>
                                        <td>Customers</td>
                                        <td>Paris</td>
                                    </tr>
                                    <tr>
                                        <td>Fran Wilson</td>
                                        <td>Lonesome Pine Restaurant</td>
                                        <td>Customers</td>
                                        <td>Portland</td>
                                    </tr>
                                    <tr>
                                        <td>Liz Nixon</td>
                                        <td>The Big Cheese</td>
                                        <td>Customers</td>
                                        <td>Portland</td>
                                    </tr>
                                    <tr>
                                        <td>Elio Rossi</td>
                                        <td>Formaggi Fortini s.r.l.</td>
                                        <td>Suppliers</td>
                                        <td>Ravenna</td>
                                    </tr>
                                    <tr>
                                        <td>Maurizio Moroni</td>
                                        <td>Reggiani Caseifici</td>
                                        <td>Customers</td>
                                        <td>Reggio Emilia</td>
                                    </tr>
                                    <tr>
                                        <td>Paul Henriot</td>
                                        <td>Vins et alcools Chevalier</td>
                                        <td>Customers</td>
                                        <td>Reims</td>
                                    </tr>
                                    <tr>
                                        <td>Paula Parente</td>
                                        <td>Wellington Importadora</td>
                                        <td>Customers</td>
                                        <td>Resende</td>
                                    </tr>
                                    <tr>
                                        <td>Mario Pontes</td>
                                        <td>Hanari Carnes</td>
                                        <td>Customers</td>
                                        <td>Rio de Janeiro</td>
                                    </tr>
                                    <tr>
                                        <td>Bernardo Batista</td>
                                        <td>Que Del&#237;cia</td>
                                        <td>Customers</td>
                                        <td>Rio de Janeiro</td>
                                    </tr>
                                    <tr>
                                        <td>Janete Limeira</td>
                                        <td>Ricardo Adocicados</td>
                                        <td>Customers</td>
                                        <td>Rio de Janeiro</td>
                                    </tr>
                                    <tr>
                                        <td>Giovanni Giudici</td>
                                        <td>Pasta Buttini s.r.l.</td>
                                        <td>Suppliers</td>
                                        <td>Salerno</td>
                                    </tr>
                                    <tr>
                                        <td>Georg Pipps</td>
                                        <td>Piccolo und mehr</td>
                                        <td>Customers</td>
                                        <td>Salzburg</td>
                                    </tr>
                                    <tr>
                                        <td>Carlos Hern&#225;ndez</td>
                                        <td>HILARION-Abastos</td>
                                        <td>Customers</td>
                                        <td>San Crist&#243;bal</td>
                                    </tr>
                                    <tr>
                                        <td>Jaime Yorres</td>
                                        <td>Let&#39;s Stop N Shop</td>
                                        <td>Customers</td>
                                        <td>San Francisco</td>
                                    </tr>
                                    <tr>
                                        <td>Beate Vileid</td>
                                        <td>Norske Meierier</td>
                                        <td>Suppliers</td>
                                        <td>Sandvika</td>
                                    </tr>
                                    <tr>
                                        <td>Pedro Afonso</td>
                                        <td>Com&#233;rcio Mineiro</td>
                                        <td>Customers</td>
                                        <td>Sao Paulo</td>
                                    </tr>
                                    <tr>
                                        <td>Aria Cruz</td>
                                        <td>Familia Arquibaldo</td>
                                        <td>Customers</td>
                                        <td>Sao Paulo</td>
                                    </tr>
                                    <tr>
                                        <td>L&#250;cia Carvalho</td>
                                        <td>Queen Cozinha</td>
                                        <td>Customers</td>
                                        <td>Sao Paulo</td>
                                    </tr>
                                    <tr>
                                        <td>Carlos Diaz</td>
                                        <td>Refrescos Americanas LTDA</td>
                                        <td>Suppliers</td>
                                        <td>Sao Paulo</td>
                                    </tr>
                                    <tr>
                                        <td>Anabela Domingues</td>
                                        <td>Tradi&#231;&#227;o Hipermercados</td>
                                        <td>Customers</td>
                                        <td>Sao Paulo</td>
                                    </tr>
                                    <tr>
                                        <td>Karl Jablonski</td>
                                        <td>White Clover Markets</td>
                                        <td>Customers</td>
                                        <td>Seattle</td>
                                    </tr>
                                    <tr>
                                        <td>Jos&#233; Pedro Freyre</td>
                                        <td>Godos Cocina T&#237;pica</td>
                                        <td>Customers</td>
                                        <td>Sevilla</td>
                                    </tr>
                                    <tr>
                                        <td>Chandra Leka</td>
                                        <td>Leka Trading</td>
                                        <td>Suppliers</td>
                                        <td>Singapore</td>
                                    </tr>
                                    <tr>
                                        <td>Jonas Bergulfsen</td>
                                        <td>Sant&#233; Gourmet</td>
                                        <td>Customers</td>
                                        <td>Stavern</td>
                                    </tr>
                                    <tr>
                                        <td>Chantal Goulet</td>
                                        <td>For&#234;ts d&#39;&#233;rables</td>
                                        <td>Suppliers</td>
                                        <td>Ste-Hyacinthe</td>
                                    </tr>
                                    <tr>
                                        <td>Michael Bj&#246;rn</td>
                                        <td>Svensk Sj&#246;f&#246;da AB</td>
                                        <td>Suppliers</td>
                                        <td>Stockholm</td>
                                    </tr>
                                    <tr>
                                        <td>Fr&#233;d&#233;rique Citeaux</td>
                                        <td>Blondesddsl p&#232;re et fils</td>
                                        <td>Customers</td>
                                        <td>Strasbourg</td>
                                    </tr>
                                    <tr>
                                        <td>Rita M&#252;ller</td>
                                        <td>Die Wandernde Kuh</td>
                                        <td>Customers</td>
                                        <td>Stuttgart</td>
                                    </tr>
                                    <tr>
                                        <td>Wendy Mackenzie</td>
                                        <td>G&#39;day, Mate</td>
                                        <td>Suppliers</td>
                                        <td>Sydney</td>
                                    </tr>
                                    <tr>
                                        <td>Yoshi Nagase</td>
                                        <td>Tokyo Traders</td>
                                        <td>Suppliers</td>
                                        <td>Tokyo</td>
                                    </tr>
                                    <tr>
                                        <td>Paolo Accorti</td>
                                        <td>Franchi S.p.A.</td>
                                        <td>Customers</td>
                                        <td>Torino</td>
                                    </tr>
                                    <tr>
                                        <td>Annette Roulet</td>
                                        <td>La maison d&#39;Asie</td>
                                        <td>Customers</td>
                                        <td>Toulouse</td>
                                    </tr>
                                    <tr>
                                        <td>Elizabeth Lincoln</td>
                                        <td>Bottom-Dollar Markets</td>
                                        <td>Customers</td>
                                        <td>Tsawassen</td>
                                    </tr>
                                    <tr>
                                        <td>Yoshi Tannamuri</td>
                                        <td>Laughing Bacchus Wine Cellars</td>
                                        <td>Customers</td>
                                        <td>Vancouver</td>
                                    </tr>
                                    <tr>
                                        <td>Daniel Tonini</td>
                                        <td>La corne d&#39;abondance</td>
                                        <td>Customers</td>
                                        <td>Versailles</td>
                                    </tr>
                                    <tr>
                                        <td>John Steel</td>
                                        <td>Lazy K Kountry Store</td>
                                        <td>Customers</td>
                                        <td>Walla Walla</td>
                                    </tr>
                                    <tr>
                                        <td>Zbyszek Piestrzeniewicz</td>
                                        <td>Wolski Zajazd</td>
                                        <td>Customers</td>
                                        <td>Warszawa</td>
                                    </tr>
                                    <tr>
                                        <td>Dirk Luchte</td>
                                        <td>Zaanse Snoepfabriek</td>
                                        <td>Suppliers</td>
                                        <td>Zaandam</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <script>
                            $(document).ready(function() {
                                $("#tblCustomer").DataTable();
                            });
                        </script>
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

</body>

</html>