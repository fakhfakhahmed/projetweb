<?php
include '../CoolAdmin-master/inc/fonctionC.php';
$f=new fonctionC();
$l=$f->afficherpanier();
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <!-- Title -->
  <title>Sisagri - Farm Services  </title>
  <!-- Favicon -->
  <link rel="icon" href="img/core-img/logo.png">
  <!-- Core Stylesheet -->
  <link rel="stylesheet" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sublime project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="styles/product.css">
    <link rel="stylesheet" type="text/css" href="styles/product_responsive.css">
    <script src="https://kit.fontawesome.com/9a61c8c3ee.js" crossorigin="anonymous"></script>



</head>

<body>
  <!-- Preloader -->
  <div class="preloader d-flex align-items-center justify-content-center">
    <div class="spinner"></div>
  </div>

  <!-- ##### Header Area Start ##### -->
  <header class="header-area">
    <!-- Top Header Area -->
    <div class="top-header-area">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="top-header-content d-flex align-items-center justify-content-between"  >
              <!-- Top Header Content -->
              <div class="top-header-meta"  backgroundColor="red">
                <p>Welcome to <span>Farmie</span>, we hope you will enjoy our products and have good experience</p>
              </div>
              <!-- Top Header Content -->
              <div class="top-header-meta text-right">
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="infodeercreative@gmail.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> <span>Email: infodeercreative@gmail.com</span></a>
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="+1 234 122 122"><i class="fa fa-phone" aria-hidden="true"></i> <span>Call Us: +84 223 9000</span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Navbar Area -->
    <div class="famie-main-menu">
      <div class="classy-nav-container breakpoint-off">
        <div class="container">
          <!-- Menu -->
          <nav class="classy-navbar justify-content-between" id="famieNav">
            <!-- Nav Brand -->
            <a href="index.php" class="nav-brand"><img src="img/core-img/logo.png" alt="" width="100px"></a>
            <!-- Navbar Toggler -->
            <div class="classy-navbar-toggler">
              <span class="navbarToggler"><span></span><span></span><span></span></span>
            </div>
            <!-- Menu -->
            <div class="classy-menu">
              <!-- Close Button -->
              <div class="classycloseIcon">
                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
              </div>
              <!-- Navbar Start -->
              <div class="classynav">
                <ul>
                  <li class="active"><a href="index.php">Home</a></li>
                  <li><a href="about.php">About</a></li>
                  <li><a href="#">Pages</a>
                    <ul class="dropdown">
                      <li><a href="index.php">Home</a></li>
                      <li><a href="about.php">About Us</a></li>
                      <li><a href="farming-practice.php">Farming Practice</a></li>
                      <li><a href="shop.php">Shop</a>
                        <ul class="dropdown">
                          <li><a href="our-product.php">Our Products</a></li>
                          <li><a href="shop.php">Shop</a></li>
                        </ul>
                      </li>
                      <li><a href="news.php">News</a>
                        <ul class="dropdown">
                          <li><a href="news.php">News</a></li>
                          <li><a href="news-details.php">News Details</a></li>
                        </ul>
                      </li>
                      <li><a href="contact.php">Contact</a></li>
                    </ul>
                  </li>
                  <li><a href="shop.php">Our Product</a></li>
                  <li><a href="farming-practice.php">Farming Practice</a></li>
                  <li><a href="#">Client</a>
                    <ul class="dropdown">
                      <li><a href="signup.php">sign up</a></li>
                      <li><a href="signin.php">sign in</a></li>

                    </ul>
                  </li>
                   <li><a href="#">customer Services</a>
                    <ul class="dropdown">
                      <li><a href="Calert.php">File a Complaint</a></li>
                      <li><a href="Calert.php">Request Assistance</a></li>
                      <li><a href="Contact.php">Contact</a></li>
                    </ul>
                  </li>
                </ul>
                <!-- Search Icon -->
                    <div id="searchIcon">
                      <i class="icon_search" aria-hidden="true"></i>
                    </div>
                <!-- Cart Icon -->
                <div id="cartIcon">
                  <a href="#">
                      <a href="../farmie/cart1.php"><i class="icon_cart_alt" aria-hidden="true"></i><span class="cart-quantity"><?php echo $l->rowcount(); ?></span></a>
                  </a>
                </div>
              </div>
              <!-- Navbar End -->
            </div>
          </nav>

          <!-- Search Form -->
          <div class="search-form">
            <form action="shop.php" method="get">
              <input type="search" name="key" id="search" placeholder="Type keywords &amp; press enter...">
                  <button type="submit" class="d-none"></button>
            </form>
            <!-- Close Icon -->
            <div class="closeIcon"><i class="fa fa-times" aria-hidden="true"></i></div>
          </div>
        </div>
      </div>
    </div>
  </header>
