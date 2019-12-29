<?php
include 'inc/header.php';
$prod=new fonctionC();
$listorod=$prod->afficherLivraison();

echo "salem";
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
                                        <a href="#">Livraison</a>
                                    </li>
                                    <li class="list-inline-item seprate">
                                        <span>/</span>
                                    </li>
                                    <li class="list-inline-item">Afficher Livraison</li>
                                </ul>
                            </div>
                            <form method="post" action="ajouterlivraison.php">
                                <button  type="submit" class="au-btn au-btn-icon au-btn--green">
                                    <i class="zmdi zmdi-plus"></i>Ajouter Livraison </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="col-lg-9">
        <div class="table100 ver2 m-b-110">
            <table class="table table-borderless table-striped table-earning"  style="margin-left: 180px;">
                <thead>
                <tr>
                    <th>ID </th>
                    <th>Date depart </th>
                    <th>Date arrive </th>
                    <th>CIN livreur </th>
                    <th>ID commande </th>
                    <th>ID client </th>

                    <th></th>
                    <th></th>

                </tr>
                </thead>
                <tbody>
<?php
$x=1;
foreach ($listorod as $row) {
    echo ' <tr>
                <td> ' . $x . '</td>
                <td> ' . $row["date_depart"] . '</td>
                <td> ' . $row["date_arrive"] . '</td>
                <td> ' . $row["id_livreur"] . '</td>
                <td> ' . $row["orderld"] . '</td>
                <td> ' . $row["username"] . '</td>
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
                                           
                                             <form action="modifierlivraison.php" method="post">
                                              <div class="modal-body mx-3">
                                              
                                              <div class="md-form mb-5">
                                                <label data-error="wrong" data-success="right" for="orangeForm-name">Date de depart</label>
                                                <input type="date" id="orangeForm-name" name="date_depart" class="form-control validate" value="'.$row["date_depart"].'" >
                                              </div>
                                              <div class="md-form mb-5">
                                                <label data-error="wrong" data-success="right" for="orangeForm-name">Date arriver </label>
                                                <input type="date" id="orangeForm-name" name="date_arrive" class="form-control validate" value="'.$row["date_arrive"].'" >
                                              </div>
                                              <div class="md-form mb-5">
                                                <label data-error="wrong" data-success="right" for="orangeForm-name">Id commande </label>
                                                <input type="text" id="orangeForm-name" name="id_commande" class="form-control validate" value="'.$row["orderld"].'" >
                                              </div>
                                              <div class="md-form mb-5">
                                                <label data-error="wrong" data-success="right" for="orangeForm-name">Id livreur </label>
                                                <input type="text" id="orangeForm-name" name="id_livreur" class="form-control validate" value="'.$row["id_livreur"].'" >
                                              </div>
                                              <div class="md-form mb-5">
                                                <label data-error="wrong" data-success="right" for="orangeForm-name">Nom du client </label>
                                                <input type="text" id="orangeForm-name" name="id_client" class="form-control validate" value="'.$row["username"].'" >
                                              </div>
                                               <input type="hidden" name="id_livraison" value="'.$row["id_livraison"].'">
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
                  <form action="supprimerlivraison.php" method="post">
                                      <input type="hidden" id="supp" name="id_livraison" value="'.$row["id_livraison"].'">
                                      <input type="submit"  value="supprimer" class="btn-sm btn-danger data-toggle="modal" data-target="#modalRegisterForm">


                </form>
                                        </td>
                                    </td>
                                  </tr>
                          
                
           ';
    $x++;
}?>
                </tbody>
            </table>
        </div>
    </div>




<?php
include 'inc/end.php';

?>