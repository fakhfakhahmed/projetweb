<?php
include "inc/panierC.php";
include "inc/panier.php";

if( isset($_POST["id_produit"]))
{
    $pC=new panierC();
    $pC->ajouterpanier($_POST["id_produit"]);
    header("location:../farmie/shop.php");
}
else
{
    echo "vérifier les champs  ";
}