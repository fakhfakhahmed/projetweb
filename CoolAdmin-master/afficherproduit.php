<?php
include 'inc/header.php';
include 'inc/fonctionC.php';
$prod=new fonctionC();
$listorod=$prod->afficherProduit();



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
                                    <a href="#">Produits</a>
                                </li>
                                <li class="list-inline-item seprate">
                                    <span>/</span>
                                </li>
                                <li class="list-inline-item">Afficher Produit</li>
                            </ul>
                        </div>
                        <form method="post" action="ajouterProduit.php">
                        <button  type="submit" class="au-btn au-btn-icon au-btn--green">
                            <i class="zmdi zmdi-plus"></i>Ajouter Produit </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="col-lg-">
    <div class="table-responsive table100 ver2 ">
        <table class="table table-borderless table-striped table-earning"  style="margin-left: 70px;">
            <thead>
            <tr>
                <th>Ref</th>
                <th>nom</th>
                <th>prix</th>
                <th> description </th>
                <th class="text-right">categorie</th>
                <th class="text-right">stock</th>
                <th>Image</th>
                <th> key word</th>
                <th>editer</th>
                <th>supprimer</th>

            </tr>
            </thead>
            <tbody>
            <?php
            $x=1;
            foreach ($listorod as $row){
                $listcat=$prod->afficherCategorie();
                echo ' <tr style="">
                <td> '.$x.'</td>
                <td> '.$row["nom"].'</td>
                <td> '.$row["prix"].'</td>
                <td class="desccc"> '.$row["description"].'</td>
                <td> '.$row["id_categorie"].'</td>
                <td> '.$row["stock"].'</td>
                <td> <img class="rounded-circle" width="50px" src="images/'.$row["img_1"].'"></td>
                <td> '.$row["key_word"].'</td>


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
                                            <form enctype="multipart/form-data" action="modifierProduit.php" method="post">
                                              <div class="modal-body mx-3">

                                              <div class="md-form mb-5">
                                                <label data-error="wrong" data-success="right" for="orangeForm-name">Nom produit</label>
                                                <input type="text" id="orangeForm-name" name="nom" class="form-control validate" value="'.$row["nom"].'" >
                                              </div>
                                              <div class="md-form mb-5">
                                                <label data-error="wrong" data-success="right" for="orangeForm-name">Prix</label>
                                                <input type="text" id="orangeForm-name" name="prix" class="form-control validate" value="'.$row["prix"].'">

                                              </div>
                                              <div class="md-form mb-5">
                                                <label data-error="wrong" data-success="right" for="orangeForm-email">Description</label>
                                                <input type="text" id="orangeForm-email" name="description" class="form-control validate" value="'.$row["description"].'">
                                              </div>

                                               <div class="md-form mb-4">
                                                <label data-error="wrong" data-success="right" for="orangeForm-pass">Catégories</label>
                                                <select  class="form-control"  size="1" name="cat">';
                                                foreach ($listcat as $cat)
                                                {
                                                    echo $row["id_categorie"];
                                                    echo $cat["id_categorie"];
                                                    echo '<option value="'.$cat["id_categorie"].'"';if($row["id_categorie"]==$cat["id_categorie"]) {echo ' selected';}echo'>'.$cat["nom_cat"].'</option>';
                                                }
                                                echo '


                                                </select>
                                              </div>



                                               <div class="md-form mb-5">
                                                <label data-error="wrong" data-success="right" for="orangeForm-name">Stock</label>
                                                <input type="text" id="orangeForm-name" name="stock" class="form-control validate" value="'.$row["stock"].'">
                                              </div>

                                                <div class="md-form mb-4">
                                                   <label data-error="wrong" data-success="right" for="orangeForm-pass">Image Produit</label>
                                                   <input type="file" id="orangeForm-pass" name="t6" class="form-control validate" value="'.$row["img_1"].'">
                                                 </div>

                                                  <div class="md-form mb-5">
                                                <label data-error="wrong" data-success="right" for="orangeForm-name">Key Word</label>
                                                <input type="text" id="orangeForm-name" name="key_word" class="form-control validate" value="'.$row["key_word"].'">
                                              </div>

                                              <input type="hidden" name="idprod" value="'.$row["id_produit"].'">
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
                  <form action="supprimerProduit.php" method="post">
                                      <input type="hidden" id="supp" name="supp" value="'.$row["id_produit"].'">
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
