<?php
include 'inc/header.php';

$com=new fonctionC();
$list=$com->afficherCom();


 ?>
<section class="au-breadcrumb m-t-75">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="au-breadcrumb-content">
                        <div class="au-breadcrumb-left">
                            <span class="au-breadcrumb-span">You are here:</span>
                            <ul class="list-unstyled list-inline au-breadcrumb__list">
                                <li class="list-inline-item active">
                                    <a href="#">Commande</a>
                                </li>
                                <li class="list-inline-item seprate">
                                    <span>/</span>
                                </li>
                                <li class="list-inline-item">Afficher commande</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="col-lg-9">
    <div class="container-fluid table100 ver2 m-b-110">
        <table id="example" class="table table-borderless table-striped table-earning"  style="margin-left: 70px;">
            <thead>
            <tr>
                <th>#</th>
                <th>Order ID</th>
                <th>User email</th>
                <th>prix a payer </th>
                <th class="text-right">Numero facture</th>
                <th class="text-right">Quantite</th>
                <th class="text-right">Date de commande </th>
                <th class="text-right">Status</th>
                <th class="text-right">Discount</th>

                <th></th>
                <th></th>

            </tr>
            </thead>
            <tbody>
            <?php
            $x=1;
            foreach ($list as $row){

                echo ' <tr>
                <td> '.$x.'</td>
                <td> '.$row["orderId"].'</td>
                <td> '.$row["uemail"].'</td>
                <td> '.$row["dueAmount"].'</td>
                <td> '.$row["innoNumber"].'</td>
                <td> '.$row["totalQty"].'</td>
                <td> '.$row["orderDate"].'</td>
                <td> '.$row["Status"].'</td>
                <td> '.$row["discount"].'</td>



                <td>

                                      <div class="text-center">
                                        <a href="" class="btn-sm btn-warning" data-toggle="modal" data-target="#modalRegisterForm'.$x.'">Modifier</a>
                                      </div>
                                      <div class="modal fade" id="modalRegisterForm'.$x.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
                                        <div class="modal-dialog" role="document">
                                          <div class="modal-content">

                                            <div class="modal-header text-center">
                                              <h4 class="modal-title w-100 font-weight-bold">Modifier Produit</h4>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                            
                                           

                                            <form action="modifiercomm.php" method="post" name="f" onsubmit="return verif()">
                                              <div class="modal-body mx-3">

                                            
                                              
                                              <div class="md-form mb-5">
                                                <label data-error="wrong" data-success="right" for="orangeForm-name">Status</label>
                                                <input type="text" id="moemen" name="status1" class="form-control validate" value="'.$row["Status"].'" >
                                              </div>
                                                

                                              <input type="hidden" name="orderId" class="orderId" value="'.$row["orderId"].'">
                                            </div>
                                            <div class="modal-footer d-flex justify-content-center">
                                          <input type="submit" class="btn btn-primary" value="Modifier">
                                            </div>
                                            </form>
                                          </div>
                                        </div>
                                      </div>



                                  </td>
<td>
                  <form action="supprimercom.php" method="post" onsubmit="return verif()">
                                      <input type="hidden" id="supp" name="supp" value="'.$row["orderId"].'">
                                      <input type="submit"  value="supprimer" class="btn-sm btn-danger">


                </form>
                                        </td>
                                    </td>
                                  </tr>
                ';
$x++;
  } ?>

            </tbody>
        </table>

    </div>
</div>



<?php
include 'inc/end.php';

?>
