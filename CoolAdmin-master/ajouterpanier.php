<?php

include "inc/panier.php";
include 'inc/fonctionC.php';
if( isset($_POST["id_produit"]))
{
    $pC=new fonctionC();
    $pC->ajouterpanier($_POST["id_produit"]);
    header("location:../farmie/shop.php");
}
else
{
    echo "vérifier les champs";
}
