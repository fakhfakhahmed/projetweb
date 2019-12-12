<?php
session_start();
if(isset($_SESSION['email']))
 {include'headerc.php';}
 else{include'header.php';

 }

$host=mysqli_connect("localhost", "root", "")or die("cannot connect");
mysqli_select_db($host,"sisagri2")or die("cannot select DB");
if(isset($_SESSION["email"])){
    $email=$_SESSION['email'];
    $sql="select * from fidelite where username='$email'";
    $req=mysqli_query($host,$sql);
    $row=mysqli_fetch_array($req);
}
else
{
    $row=0;
}


$mais=new fonctionC();
$listemais=$mais->afficherpanier();
?>

    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Panier</h1>
        </div>
    </section>

    <div class="container mb-4">
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col"> </th>
                            <th scope="col">Product</th>
                            <th scope="col">Available</th>
                            <th scope="col" class="text-center">Quantity</th>
                            <th scope="col" class="text-right">Price</th>
                            <th> </th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        if($listemais->rowCount()==0)
                        {
                            echo '
                                    <tr>
                                        <td colspan="6"> <h3 class="text-center">No items in your Cart Go to <a href="shop.php" class="h3" ">shop</a></h3></td>
                                    </tr>
                                ';
                        }
                        $total=0;
                        foreach ($listemais as $p)
                        {
                            $prod=$mais->getprod($p["id_produit"]);
                            $total=$total+$prod["prix"]*$p["qty"];
                            echo '
                            <tr>
                                <td><img width="50px" src="'.'../CoolAdmin-master/images/'.$prod["img_1"].'" /> </td>
                                <td>'.$prod["nom"].'</td>
                                <td>In stock</td>
                                <td>
                                    <form action="modifierCart.php" method="post">
                                        <input style="width: 50%;" class="form-control" type="number" name="qty" min="0" max="'.$prod["stock"].'" value="'.$p["qty"].'" />
                                        <input type="hidden" name="idP" value="'.$prod["id_produit"].'">
                                        <button type="submit" class="btn btn-warning">modifier</button>
                                    </form>
                                </td>
                                <td class="text-right">'.$prod["prix"].' TND</td>
                                <td class="text-right">
                                    <form action="deleteCart.php" method="post">
                                        <input type="hidden" name="idP" value="'.$prod["id_produit"].'">
                                        <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button>
                                    </form>
                                </td>
                            </tr>
                            ';
                        }
                        ?>

                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Sub-Total</td>
                            <td class="text-right"><?php echo $total ." TND"?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Shipping</td>
                            <td class="text-right"><?php if($total>0){echo'10 TND';}else{echo '0 TND';}?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>fid</td>
                            <td class="text-right"><?php if($total>0){echo $row['1'];}else{echo '0 TND';}?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><strong>Total</strong></td>
                            <td class="text-right"><strong><?php if($total+10-$row['1']>0) {echo $total+10-$row['1'] ." TND";} else{echo '0 TND';}?></strong></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col mb-2">
                <div class="row">
                    <div class="col-sm-12  col-md-6">
                        <a href="shop.php"><button class="btn btn-block btn-light">Continue Shopping</button></a>
                    </div>
                    <div class="col-sm-12 col-md-6 text-right">
                        <?php
                        if(isset($_SESSION["email"]))
                        {
                            echo '
                            <form action="creeCommande.php" method="post">

                            <input type="hidden" name="uemail" value="'.$_SESSION['email'].'">';
                            if($listemais->rowCount()!=0)
                            {
                                echo '
                            <button type="submit" class="btn btn-lg btn-block btn-success text-uppercase">Checkout</button>
                            ';
                            }
                            echo '
                        </form>
                            ';
                        }
                        else
                        {
                            echo '<button type="" class="btn btn-lg btn-block btn-success text-uppercase"><a href="signin.php">Checkout</a></button>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
include "footer.php";

?>
