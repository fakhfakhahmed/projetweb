<?php

session_start();
if(isset($_SESSION['email']))
{include'headerc.php';}
else
    {include 'header.php';


}

$desc= $_GET['id'];


// include '../CoolAdmin-master/inc/fonctionC.php';
//  include '../CoolAdmin-master/inc/categorieC.php';
$prod=new fonctionC();
$listselon=$prod->afficherDesc($desc);




?>
<?php
if ($desc>0) {
    foreach ($listselon as $row) {
        echo '

    <div class="product_details">
        <div class="container">
            <div class="row details_row">

                <!-- Product Image -->
                <div class="col-lg-6">
                    <div class="details_image">
                        <div class="details_image_large"><img src="' . '../CoolAdmin-master/images/' . $row["img_1"] . '" data-imagezoom="true" alt=""></div>

                    </div>
                </div>


                <!-- Product Content -->
                <div class="col-lg-6">
                    <div class="details_content">
                        <div class="details_name">' . $row["nom"] . '</div>

                        <div class="details_price">' . $row["prix"] . '</div>
                        ';

        if ($row["stock"] > 10) {
            echo '
                        <!-- In Stock -->
                        <div class="in_stock_container">
                            <div class="availability">Availability:</div>

                            <span>On STOCK</span>
                        </div>

                       ';
        }
      else if(($row["stock"] > 0) and ($row["stock"]<=10)) {
            echo '
                        <!-- In Stock -->
                        <div class="in_stock_container">
                            <div class="availability">Availability:</div>

                            <span style="color: orange;">Last 10 items </span>
                        </div>

                       ';
        }
        else {
            echo '
                        <!-- In Stock -->
                        <div class="in_stock_container">
                            <div class="availability">Availability:</div>

                            <span style="color: #ff0039;">Off STOCK</span>
                        </div>

                       ';
        }
            echo '
                        <div class="details_text">
                            <p>' . $row["description"] . '</p>
                        </div>

                        <!-- Product Quantity -->
                      ';
        if ($row["stock"] > 0) {

        echo'
   <div class="product_quantity_container">
                            <div class="product_quantity clearfix">
                                <span>Qty</span>
                                <input id="quantity_input" type="text" pattern="[0-9]*" value="1">
                                <div class="quantity_buttons">
                                    <div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
                                    <div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
                                </div>
                            </div>


                             <div  class="button cart_button disabled " ><a  href="../CoolAdmin-master/ajouterpanier.php" >Add to cart </a></div>';}

        echo'

                        </div>

                        <!-- Share -->

                    </div>
                </div>
            </div>

    
        </div>
    </div>
';




?>

<section class="our-products-area section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Section Heading -->
                <div class="section-heading text-center">
                    <p>Featured Products</p>
                    <h2><span>Our Product</span> Are Highest Quality</h2>
                    <img src="img/core-img/decor2.png" alt="">
                </div>
            </div>
        </div>
        <div class="row">
        <?php

                    $key= $row['key_word'];
                    $listorod=$prod->afficherProduit(null,$key);


                foreach ($listorod as $row )
                {
                    echo'
                
        

            <!-- Single Product Area -->


            <!-- Single Product Area -->


            <!-- Single Product Area -->

            <!-- Single Product Area -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-product-area mb-50 wow fadeInUp" data-wow-delay="700ms">
                    <!-- Product Thumbnail -->
                    <div class="product-thumbnail">
                        <img src="' . '../CoolAdmin-master/images/' . $row["img_1"] . '" alt="">
                        <!-- Product Tags -->
                       
                        <!-- Product Meta Data -->
                        <div class="product-meta-data">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Favourite"><i class="icon_heart_alt"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon_cart_alt"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="arrow_left-right_alt"></i></a>
                        </div>
                    </div>
                    <!-- Product Description -->
                    <div class="product-desc text-center pt-4">
                        <a href="product-detail.php?idprod='.$row["id_produit"].'" class="product-title">'.$row["nom"].'</a>
                        <h6 class="price"><span> </span> '.$row["prix"].' TND</h6>
                    </div>
                </div>
            </div>

        
                ';
                }
                }
        }
                ?>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="gotoshop-btn text-center wow fadeInUp" data-wow-delay="900ms">
                    <a href="shop.php" class="btn famie-btn">Go to Store</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include'footer.php';?>
