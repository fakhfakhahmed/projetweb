<?php
include 'inc/header.php';
$prod=new fonctionC();
$listorod=$prod->afficherLivreur();
//echo "salem";
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
                                        <a href="#">Livreur</a>
                                    </li>
                                    <li class="list-inline-item seprate">
                                        <span>/</span>
                                    </li>
                                    <li class="list-inline-item">Afficher Livreur</li>
                                </ul>
                            </div>
                            <form method="post" action="ajouterLivreur.php">
                                <button  type="submit" class="au-btn au-btn-icon au-btn--green">
                                    <i class="zmdi zmdi-plus"></i>Ajouter Livreur </button>
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
                    <th>CIN</th>
                    <th>Nom </th>
                    <th>Prenom </th>
                    <th>Etat </th>
                    <th>Matricule </th>
                    <th>Adresse</th>
                    <th>Tel </th>

                    <th></th>
                    <th></th>

                </tr>
                </thead>
                <tbody>
<?php
//$x=1;
foreach ($listorod as $row) {
    echo ' <tr>
                <td> ' . $row["id_livreur"] . '</td>
                <td> ' . $row["nom"] . '</td>
                <td> ' . $row["prenom"] . '</td>
                <td> ' . $row["etat"] . '</td>
                <td> ' . $row["matricule"] . '</td>
                <td> ' . $row["adresse"] . '</td>
                <td> ' . $row["tel"] . '</td>
                  <td>
                                      <div class="text-center">
                                        <a href="" class="btn-sm btn-warning" data-toggle="modal" data-target="#modalRegisterForm'.$row["id_livreur"].'">Modifier</a>
                                      </div>
                                      <div class="modal fade" id="modalRegisterForm'.$row["id_livreur"].'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
                                        <div class="modal-dialog" role="document">
                                          <div class="modal-content">
                                          
                                            <div class="modal-header text-center">
                                              <h4 class="modal-title w-100 font-weight-bold">Modifier Produit</h4>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                               </div>
                                           
                                             <form action="modifierlivreur.php" method="post">
                                              <div class="modal-body mx-3">
                                              
                                              <div class="md-form mb-5">
                                                <label data-error="wrong" data-success="right" for="orangeForm-name">Nom  </label>
                                                <input type="text" id="orangeForm-name" name="nom" class="form-control validate" value="'.$row["nom"].'" >
                                              </div>
                                              <div class="md-form mb-5">
                                                <label data-error="wrong" data-success="right" for="orangeForm-name">Prenom </label>
                                                <input type="text" id="orangeForm-name" name="prenom" class="form-control validate" value="'.$row["prenom"].'" >
                                              </div>
                                              <div class="md-form mb-5">
                                                <label data-error="wrong" data-success="right" for="orangeForm-name">Etat </label>
                                                <input type="text" id="orangeForm-name" name="etat" class="form-control validate" value="'.$row["etat"].'" >
                                              </div>
                                              <div class="md-form mb-5">
                                                <label data-error="wrong" data-success="right" for="orangeForm-name">Matricule </label>
                                                <input type="text" id="orangeForm-name" name="matricule" class="form-control validate" value="'.$row["matricule"].'" >
                                              </div>
                                              <div class="md-form mb-5">
                                                <label data-error="wrong" data-success="right" for="orangeForm-name">Adresse </label>
                                                <input type="text" id="orangeForm-name" name="adresse" class="form-control validate" value="'.$row["adresse"].'" >
                                              </div>
                                              <div class="md-form mb-5">
                                                <label data-error="wrong" data-success="right" for="orangeForm-name">Tel </label>
                                                <input type="text" id="orangeForm-name" name="tel" class="form-control validate" value="'.$row["tel"].'" >
                                              </div>
                                              <input type="hidden" name="id" value="'.$row["id_livreur"].'">
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
                  <form action="supprimerlivreur.php" method="post">
                                      <input type="hidden" name="id" value="'.$row["id_livreur"].'">
                                      <input type="submit"  value="supprimer" class="btn-sm btn-danger data-toggle="modal" data-target="#modalRegisterForm">


                </form>
                                        </td>
                                    </td>
                                  </tr>
                          
                
           ';
    //$x++;
}?>
                </tbody>
            </table>
        </div>
    </div>




<?php
include 'inc/end.php';

?>