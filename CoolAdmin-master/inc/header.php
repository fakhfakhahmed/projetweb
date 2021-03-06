<!DOCTYPE html>
<?php session_start();
if(!(isset($_SESSION['mail'])))
{
  header('location:login.php');

}?>
<?php   include 'inc/fonctionC.php';
$prod=new fonctionC();
$l=$prod->afficherProduit(null,null,1);?>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard 2</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link href="vendor/vector-map/jqvmap.min.css" rel="stylesheet" media="all">
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
    <link href="css/font-face.css" rel="stylesheet" media="all">
   <link rel="">
</head>

<body >

<div class="page-wrapper">
    <!-- MENU SIDEBAR-->
    <aside class="menu-sidebar2">
        <div class="logo">
            <a href="#">
                <img src="images/icon/logo-white.png" alt="Cool Admin" />
            </a>
        </div>
        <div class="menu-sidebar2__content js-scrollbar1">
            <div class="account2">

                <h4 class="name"><?php echo $_SESSION['name'].' '.$_SESSION['lastname'];?></h4>
          <form method="post" action='logout.php'>
                <input type="submit" value="log out" class="btn-sm btn-danger">
            </div>
            <nav class="navbar-sidebar2">
                <ul class="list-unstyled navbar__list">
                    <li class="active has-sub">
                        <a  href="index.php">
                            <i class="fas fa-tachometer-alt"></i>Dashboard
                            <span class="arrow">

                                </span>
                        </a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">




                        </ul>
                    </li>
                    <li>
                        <a href="inbox.html">
                            <i class="fas fa-chart-bar"></i>Inbox</a>
                        <span class="inbox-num">3</span>
                    </li>
                    <li>
                        <a href="afficherclient.php">
                            <i class="fas fa-users"></i>client</a>

                    </li>
                    <li>
                        <a href="afficheradmin.php">
                            <i class="fas fa-user"></i>admin</a>

                    </li>

                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-table"></i>Produits
                            <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                        </a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <li>
                                <a href="afficherproduit.php">
                                    <i class="fas fa-table"></i>Afficher</a>
                            </li>
                            <li>
                                <a href="ajouterProduit.php">
                                    <i class="fas fa-table"></i>Ajouter</a>
                            </li>
                        </ul>

                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-table"></i>Livreur
                            <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                        </a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <li>
                                <a href="afficherlivreur.php">
                                    <i class="fas fa-table"></i>Afficher</a>
                            </li>
                            <li>
                                <a href="ajouterlivreur.php">
                                    <i class="fas fa-table"></i>Ajouter</a>
                            </li>
                        </ul>

                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-table"></i>Livraison
                            <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                        </a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <li>
                                <a href="afficherlivraison.php">
                                    <i class="fas fa-table"></i>Afficher</a>
                            </li>
                            <li>
                                <a href="ajouterLivraison.php">
                                    <i class="fas fa-table"></i>Ajouter</a>
                            </li>
                        </ul>

                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-table"></i>Catégories
                            <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                        </a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <li>
                                <a href="afficheCategorie.php">
                                    <i class="fas fa-table"></i>Afficher</a>
                            </li>
                            <li>
                                <a href="ajouterCategorie.php">
                                    <i class="fas fa-table"></i>Ajouter</a>
                            </li>
                        </ul>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-table"></i>Commande
                                <span class="arrow">
                                        <i class="fas fa-angle-down"></i>
                                    </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="affichercommande.php">
                                        <i class="fas fa-table"></i>Afficher</a>
                                </li>
                            </ul>
                           <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-table"></i>Client service
                                <span class="arrow">
                                        <i class="fas fa-angle-down"></i>
                                    </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="./afficherComplaint.php">
                                        <i class="fas fa-table"></i>Show Complaints </a>
                                </li>
                                <li>
                                    <a href="./afficherRequest.php">
                                        <i class="fas fa-table"></i>Show Help Requests</a>
                                </li>
                            </ul>

                        <!-- <li>
                             <a href="form.html">
                                 <i class="far fa-check-square"></i>Forms</a>
                         </li>
                         <li>
                             <a href="calendar.html">
                                 <i class="fas fa-calendar-alt"></i>Calendar</a>
                         </li>
                         <li>
                             <a href="map.html">
                                 <i class="fas fa-map-marker-alt"></i>Maps</a>
                         </li>
                     </ul>
                 </li> --!>

                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-copy"></i>Pages
                            <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                        </a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <li>
                                <a href="login.html">
                                    <i class="fas fa-sign-in-alt"></i>Login</a>
                            </li>
                            <li>
                                <a href="register.html">
                                    <i class="fas fa-user"></i>Register</a>
                            </li>
                            <li>
                                <a href="forget-pass.html">
                                    <i class="fas fa-unlock-alt"></i>Forget Password</a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </nav>
        </div>
    </aside>
    <!-- END MENU SIDEBAR-->

    <!-- PAGE CONTAINER-->
    <div class="page-container2">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop2">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="header-wrap2">
                        <div class="logo d-block d-lg-none">
                            <a href="index.php">
                                <img src="images/icon/logo-white.png" alt="Sisagri" />
                            </a>
                        </div>
                        <div class="header-button2">
                            <div class="header-button-item js-item-menu">
                                <i class="zmdi zmdi-search"></i>
                                <div class="search-dropdown js-dropdown">
                                    <form action="">
                                        <input class="au-input au-input--full au-input--h65" type="text" placeholder="Search for datas &amp; reports..." />
                                        <span class="search-dropdown__icon">
                                                <i class="zmdi zmdi-search"></i>
                                            </span>
                                    </form>
                                </div>
                            </div>
                            <div class="header-button-item <?php if($l->rowCount()>0){echo 'has-noti';}?> js-item-menu">
                                <i class="zmdi zmdi-notifications"></i>
                                <div class="notifi-dropdown js-dropdown">
                                    <?php
                                    foreach ($l as $pp) {
                                        echo '
                                    <div class="notifi__item">
                                        <div class="bg-c1 img-cir img-40">
                                           <a style="color: white;" href="afficherproduit.php" <i class="zmdi zmdi-email-open"></i></a>
                                        </div>
                                        <div class="content">
                                        <a href="afficherproduit.php"><p>le produit  '.$pp["nom"].' est epuisé</p></a>
                                      
                                        </div>
                                    </div>
                                        ';}
                                        ?>
                                </div>
                            </div>
                            <div class="header-button-item mr-0 js-sidebar-btn">
                                <i class="zmdi zmdi-menu"></i>
                            </div>
                            <div class="setting-menu js-right-sidebar d-none d-lg-block">
                                <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-account"></i>Account</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-settings"></i>Setting</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-money-box"></i>Billing</a>
                                    </div>
                                </div>
                                <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-globe"></i>Language</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-pin"></i>Location</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-email"></i>Email</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-notifications"></i>Notifications</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
