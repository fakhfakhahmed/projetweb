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
                                <input id="quantity_input" type="text" pattern="[0-9]*" min="1" max="'.$row["stock"].'" value="1">
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

            <div class="row description_row">
                <div class="col">
                    <div class="description_title_container">
                        <div class="description_title">Review</div>

                    </div>
                    <div class="description_text">
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Phasellus id nisi quis justo tempus mollis sed et dui. In hac habitasse platea dictumst. Suspendisse ultrices mauris diam. Nullam sed aliquet elit. Mauris consequat nisi ut mauris efficitur lacinia.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
';
        }



?>
<section class="relateproduct bgwhite p-t-45 p-b-138">
    <div class="container">
        <div class="sec-title p-b-60">
            <h3 style="font-size: xx-large; color: black;" class="m-text5 t-center">
                Produits similaires
            </h3>
        </div>

        <!-- Slide2 -->
        <div class="wrap-slick2">
            <div class="slick2">
                <?php

                    $key= $row['key_word'];
                    $listorod=$prod->afficherProduit(null,$key);


                foreach ($listorod as $row )
                {
                    echo '
              <div class="item-slick2 p-l-15 p-r-15">
    						<!-- Block2 -->
    						<div class="block2">
    							<div class="block2-img wrap-pic-w of-hidden pos-relative ">
    								<img width="90px" height="220px" src="' . '../CoolAdmin-master/images/' . $row["img_1"] . '"   alt="IMG-PRODUCT" >

    								<div class="block2-overlay trans-0-4">
    									<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
    										<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
    										<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
    									</a>

    									<div class="block2-btn-addcart w-size1 trans-0-4">
    										<!-- Button -->
    										<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
    											Add to Cart
    										</button>
    									</div>
    								</div>
    							</div>

    							<div class="block2-txt p-t-20">

    								<a href="product-detail.php?idprod='.$row["id_produit"].'" class="block2-name dis-block s-text3 p-b-5">
    									'.$row["nom"].'
    								</a>

    								<span class="block2-price m-text6 p-r-5">
    									'.$row["prix"].' TND
    								</span>
    							</div>
    						</div>
    					</div>
              ';
                }}
                ?>


            </div>
        </div>

    </div>
</section>
<?php include'footer.php';?>
