<?php
include 'inc/header.php';
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
            <strong>Ajouter</strong> Categorie
        </div>
        <div class="card-body card-block">
            <form action="ajoutcat.php" method="post" enctype="multipart/form-data" class="form-horizontal" onsubmit="return verif()">

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
                        <label for="text-input" class=" form-control-label">Nom Categorie</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="nom" name="nom" placeholder="Text" class="form-control">
                        <small class="form-text text-muted">Ajouter un nom de Categorie</small>
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
