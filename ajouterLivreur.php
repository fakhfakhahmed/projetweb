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
                                        <a href="#">Livreur</a>
                                    </li>
                                    <li class="list-inline-item seprate">
                                        <span>/</span>
                                    </li>
                                    <li class="list-inline-item">Ajouter Livreur</li>
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
            <strong>Ajouter</strong> Livreur
        </div>
        <div class="card-body card-block">
            <form action="ajouterliv.php" method="post" enctype="multipart/form-data" class="form-horizontal" onsubmit="return verif()">

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">CIN Livreur</label>
                    </div>
                    <div class="col-12 col-md-9">
                                <input type="text" id="nom" name="id" placeholder="Text" class="form-control" >
                        <small id="err" class="form-text ">Ajouter le numero de CIN du livreur</small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Nom </label>
                    </div>
                    <div class="col-12 col-md-9">
                                <input type="text" id="cat1" name="nom" placeholder="Text" class="form-control" >
                        <small id="err1" class="form-text ">Ajouter un nom du livreur</small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">prenom du livreur</label>
                    </div>
                    <div class="col-12 col-md-9">
                                <input type="text" id="cat2" name="prenom" placeholder="Text" class="form-control" >
                        <small id="err2" class="form-text ">Ajouter le prenom du livreur</small>
                    </div>
                </div>
                
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="select" class=" form-control-label">Etat</label>

                    </div>
                    <div class="col-12 col-md-9">
                        <select name="etat" id="cat" class="form-control">

                            <option> SELECT Etat  </option>
                            <option>0</option>;
                            <option>1</option>;
                        </select>
                        <small id="err" class="form-text text-muted">0 pour disponible ou 1 sinon</small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Matricule voiture</label>
                    </div>
                    <div class="col-12 col-md-9">
                                <input type="text" id="cat3" name="matricule" placeholder="Text" class="form-control" >
                        <small id="err3" class="form-text ">Ajouter un matricule</small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Adresse</label>
                    </div>
                    <div class="col-12 col-md-9">
                                <input type="text" id="cat4" name="adresse" placeholder="Text" class="form-control" >
                        <small id="err4" class="form-text ">Ajouter une adresse du livreur</small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Tel</label>
                    </div>
                    <div class="col-12 col-md-9">
                                <input type="text" id="nom" name="tel" placeholder="Text" class="form-control" >
                        <small id="err" class="form-text ">Ajouter un numero de telephone</small>
                    </div>
                </div>
                <div style="margin-left: 530px;" >
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Submit
                    </button>
                    <button type="reset" class="btn btn-danger btn-sm" id="my" onclick="reset()">
                        <i class="fa fa-ban"></i> Reset
                    </button>
                </div>





            </form>
        </div>

    </div>
    <?php
    include 'inc/end.php';
    ?>
