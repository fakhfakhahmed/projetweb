<?php

session_start();
if(isset($_SESSION['email']))
{include'headerc.php';}
else
    {include 'header.php';


}

$desc= $_GET['id'];


include '../CoolAdmin-master/inc/fonctionC.php';
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
                        <div class="details_image_large"><img src="' . '../CoolAdmin-master/images/' . $row["img_1"] . '" alt=""></div>

                    </div>
                </div>

                <!-- Product Content -->
                <div class="col-lg-6">
                    <div class="details_content">
                        <div class="details_name">' . $row["nom"] . '</div>

                        <div class="details_price">' . $row["prix"] . '</div>

                        <!-- In Stock -->
                        <div class="in_stock_container">
                            <div class="availability">Availability:</div>
                            <span>' . $row["stock"] . '</span>
                        </div>
                        <div class="details_text">
                            <p>' . $row["description"] . '</p>
                        </div>

                        <!-- Product Quantity -->
                        <div class="product_quantity_container">
                            <div class="product_quantity clearfix">
                                <span>Qty</span>
                                <input id="quantity_input" type="text" pattern="[0-9]*" value="1">
                                <div class="quantity_buttons">
                                    <div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
                                    <div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
                                </div>
                            </div>
                            <div class="button cart_button"><a href="#">Add to cart</a></div>
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
}
?>
<?php include'footer.php';?>