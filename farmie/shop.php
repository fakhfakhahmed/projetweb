<?php

session_start();
if(isset($_SESSION['email']))
{include'headerc.php';}
else{include'header.php';


}



  include '../CoolAdmin-master/inc/fonctionC.php';
//  include '../CoolAdmin-master/inc/categorieC.php';
  $prod=new fonctionC();
  $listorod=$prod->afficherProduit();
  $listcat=$prod->afficherCategorie();



  ?>
  <!-- ##### Header Area End ##### -->

  <!-- ##### Breadcrumb Area Start ##### -->
  <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url('img/bg-img/18.jpg');">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12">
          <div class="breadcrumb-text">
            <h2>Shop</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="famie-breadcrumb">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Shop</li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- ##### Breadcrumb Area End ##### -->

  <!-- ##### Shop Area Start ##### -->
  <section class="shop-area section-padding-0-100">
    <div class="container">

      <div class="row">
        <!-- Shop Filters -->
        <div class="col-12">
          <div class="shop-filters mb-30 d-flex align-items-center justify-content-between">
            <!-- Product Show -->
            <div class="product-show">
              <h6>Showing 1–9 of 72 results</h6>
            </div>

            <!-- Product View Mode -->
            <div class="produtc-view-mode">
              <a href="#"><i class="fa fa-th"></i></a>
              <a href="#"><i class="fa fa-list-ul"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <!-- Shop Sidebar Area -->
        <div class="col-12 col-md-4 col-lg-3">

          <!-- Shopping Cart -->
          <div class="shopping-cart mb-50">

                    <!-- Cart Table -->
                    <div class="cart-table clearfix">
                        <table class="table table-responsive">
                            <!-- tbody -->
                            <tbody>
                  <!-- Single Table Row -->

                  <!-- Single Table Row -->

                </tbody>
              </table>
            </div>
            <!-- SubTotal -->

            <!-- Checkout -->

          </div>

          <!-- Single Widget Area -->
          <div class="single-widget-area">
            <!-- Title -->
            <h5 class="widget-title">Catagories</h5>

              <ul>
                  <li><a href="#">all Products</a></li>
                  <?php

                  foreach ($listcat as $cat)
                  {

                      echo '  <li><a href="afficheselon.php?cat='.$cat["id_categorie"].'">'; echo' '.$cat["nom_cat"].' 
                  </a></li>';
                  }


                  ?>
              </ul>

            <!-- Cata List -->


          </div>

          <!-- Single Widget Area -->


          <!-- Single Widget Area -->


        </div>

        <!-- Shop Products Area -->
        <div class="col-12 col-md-8 col-lg-9">
          <div class="row">

            <!-- Single Product Area -->
              <?php


                  foreach ($listorod as $row) {

                      echo '
            <div class="col-12 col-sm-6 col-lg-4">
              <div class="single-product-area mb-50">
                <!-- Product Thumbnail -->
                <div class="product-thumbnail">
                  <img style="width: 500px; height: 300px;" src="' . '../CoolAdmin-master/images/' . $row["img_1"] . '" alt="">
                  <!-- Product Tags -->
                  <span class="product-tags">SALE</span>
                  <!-- Product Meta Data -->
                  <div class="product-meta-data">
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Favourite"><i class="icon_heart_alt"></i></a>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon_cart_alt"></i></a>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="arrow_left-right_alt"></i></a>
                  </div>
                </div>
                <!-- Product Description -->
                
                <div class="product-desc text-center pt-4">
                  <a href="#" class="product-title">' . $row["nom"] . '</a>
                  <h6 class="price">' . $row["prix"] . ' DNT</h6>
                </div>
              </div>
            </div>
              ';
                 }


                  ?>

            <!-- Single Product Area -->


            <!-- Single Product Area -->


            <!-- Single Product Area -->

            <!-- Single Product Area -->


            <!-- Single Product Area -->

            <!-- Single Product Area -->


            <!-- Single Product Area -->

                <!-- Product Description -->


            <!-- Single Product Area -->

            <!-- Single Product Area -->


            <!-- Single Product Area -->

                <!-- Product Description -->


            <!-- Single Product Area -->

                <!-- Product Description -->




          <!-- Pagination -->

      </div>
        </div>

    </div>
  </section>
  <!-- ##### Shop Area End ##### -->

  <!-- ##### Footer Area Start ##### -->
  <?php include'footer.php';?>
