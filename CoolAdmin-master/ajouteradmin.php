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
                                    <a href="#">admins</a>
                                </li>
                                <li class="list-inline-item seprate">
                                    <span>/</span>
                                </li>
                                <li class="list-inline-item">Ajouter admin</li>
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
            <strong>Ajouter</strong> admin
        </div>
        <div class="card-body card-block">
            <form action="inc/views/ajoutadmin.php" method="post"  class="form-horizontal">

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Nom</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="nom" name="nom" placeholder="Text" class="form-control">
                        <small class="form-text text-muted">Ajouter un nom d'admin</small>
                    </div>

                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">prenom</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="nom" name="prenom" placeholder="Text" class="form-control">
                        <small class="form-text text-muted">Ajouter un prenom d'admin</small>
                    </div>

                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">tel</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="nom" name="phone" placeholder="Text" class="form-control">
                        <small class="form-text text-muted">Ajouter un tel d'admin</small>
                    </div>

                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">username</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="nom" name="user" placeholder="Text" class="form-control">
                        <small class="form-text text-muted">Ajouter un username d'admin</small>
                    </div>

                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">email</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="email" id="nom" name="email" placeholder="Text" class="form-control">
                        <small class="form-text text-muted">Ajouter un email d'admin</small>
                    </div>

                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">password</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="password" id="nom" name="pwd" placeholder="Text" class="form-control">
                        <small class="form-text text-muted">Ajouter un password d'admin</small>
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
