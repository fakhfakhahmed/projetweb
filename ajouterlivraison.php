<?php
include 'inc/header.php';
include 'inc/db.php';
include "inc/fonctionC.php";
$c=new fonctionC();
$d=new fonctionC();
$m=new fonctionC();
$cd=$m->afficherCommande();
$dc=$d->afficherClient();
$lc=$c->afficherLivreurdispo();
?>
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
                                    <li class="list-inline-item">Ajouter Livraison</li>
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
            <strong>Ajouter</strong> Livraison
        </div>
        <div class="card-body card-block">
            <form action="ajouterlivrai.php" method="post" name="myform" enctype="multipart/form-data" class="form-horizontal" onsubmit="return verif()">

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Id livraison</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="text-input" placeholder="Disabled sera ajouter auto" class="form-control" disabled>
                        <small class="form-text text-muted">Ajouter idantifiant livraison</small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Date depart </label>
                    </div>
                    <div class="col-12 col-md-9">
                                <input type="date" id="nom" name="date_depart" placeholder="Text" class="form-control" >
                        <small id="err" class="form-text ">Ajouter date de depart de la livraison</small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Date arrive</label>
                    </div>
                    <div class="col-12 col-md-9">
                                <input type="date" id="cat3" name="date_arrive" placeholder="Text" class="form-control" >
                        <small id="err1" class="form-text ">Ajouter date arrive de la livraison</small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="select" class=" form-control-label">Identifiant de la commande</label>

                    </div>
                    <div class="col-12 col-md-9">
                        <select name="id_commande" id="cat" class="form-control">

                            <option> SELECT commande  </option>
                            <?php
                            foreach ($cd as $cat)
                            {
                                echo '<option value="'.$cat["orderId"].'">  '.$cat["uemail"].' </option>';
                            }
                            ?>


                        </select>
                        <small id="err2" class="form-text text-muted">Ajouter identifiant de la commande</small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="select" class=" form-control-label">identifiant du client</label>

                    </div>
                    <div class="col-12 col-md-9">
                        <select name="id_client" id="cat1" class="form-control">

                            <option> SELECT Client  </option>
                            <?php
                            foreach ($dc as $cl)
                            {
                                echo '<option value="'.$cl["username"].'">  '.$cl["nom"].' </option>';
                            }
                            ?>


                        </select>
                        <small id="err3" class="form-text text-muted">Ajouter identifiant du client</small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="select" class=" form-control-label">identifiant du livreur</label>

                    </div>
                    <div class="col-12 col-md-9">
                        <select name="id_livreur" id="cat2" class="form-control">

                            <option> SELECT Livreur  </option>
                            <?php
                            foreach ($lc as $cl)
                            {
                                echo '<option value="'.$cl["id_livreur"].'">  '.$cl["nom"].' </option>';
                            }
                            ?>


                        </select>
                        <small id="err4" class="form-text text-muted">Ajouter CIN du livreur</small>
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
