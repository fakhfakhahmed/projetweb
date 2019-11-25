<?php
include 'inc/header.php';
include 'inc/db.php';
include "inc/fonctionC.php";
$c=new fonctionC();
$lc=$c->afficherCategorie();
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
                                <li class="list-inline-item">Ajouter Produit</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="col-lg-6" style="margin-top: 100px;margin-left: 375px;">
    <div class="card">
        <div class="card-header">
            <strong>Ajouter</strong> Produit
        </div>
        <div class="card-body card-block">
            <form action="ajoutprod.php" method="post" enctype="multipart/form-data" class="form-horizontal">

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Reference</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="text-input" placeholder="Disabled sera ajouter auto" class="form-control" disabled>
                        <small class="form-text text-muted">Ajouter Reference de Produit</small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="select" class=" form-control-label">Catego</label>

                    </div>
                    <div class="col-12 col-md-9">
                        <select name="t1" id="cat" class="form-control">

                            <option> SELECT CATEGO  </option>
                            <?php
                            foreach ($lc as $cat)
                            {
                                echo '<option value="'.$cat["id_categorie"].'">  '.$cat["nom_cat"].' </option>';
                            }
                            ?>


                        </select>
                        <small class="form-text text-muted">Ajouter Categorie de Produit</small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Nom Produit</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="nom" name="t2" placeholder="Text" class="form-control">
                        <small class="form-text text-muted">Ajouter un nom de Produit</small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Prix</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="Prix" name="t3" placeholder="Text" class="form-control">
                        <small class="form-text text-muted">Ajouter Prix de Produit</small>
                    </div>
                </div>



                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="textarea-input" class=" form-control-label">Description</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <textarea name="t4" id="Desc" rows="9" placeholder="Content..." class="form-control"></textarea>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label"> Stock </label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="stock" name="t5" placeholder="Text" class="form-control">
                        <small class="form-text text-muted">Ajouter Stock de Produit</small>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="file-input" class=" form-control-label">image</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="file" id="img" name="t6" value="images/1.jpg">
                        <small class="form-text text-muted">Ajouter Image de Produit</small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label"> Key Words </label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="keyword" name="t7" placeholder="Text" class="form-control">
                        <small class="form-text text-muted">Ajouter KeyWords de Produit</small>
                    </div>
                </div>
                <div style="margin-left: 530px;" >
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Submit
                    </button>
                    <button type="reset" class="btn btn-danger btn-sm" >
                        <i class="fa fa-ban"></i> Reset
                    </button>
                </div>





            </form>
        </div>

    </div>







<?php
include 'inc/end.php';
?>
