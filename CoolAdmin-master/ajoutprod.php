<?php
include "inc/produit.php";
include "inc/fonctionC.php";
$target = "images/";
$target = $target . basename( $_FILES['t6']['name']);
$Filename=basename( $_FILES['t6']['name']);
if(move_uploaded_file($_FILES['t6']['tmp_name'], $target))
{
    //Tells you if its all ok
    echo "The file " . basename($_FILES['t6']['name']) . " has been uploaded, and your information has been added to the directory";
}

if(isset($_POST["t1"]) and isset($_POST["t2"]) and isset($_POST["t3"]) and isset($_POST["t4"]) and isset($_POST["t5"]) and isset($_POST["t7"]))
{
    $invC=new fonctionC();
    $invC->ajouterProduit($_POST["t1"],$_POST["t2"],$_POST["t3"],$_POST["t4"],$_POST["t5"],$Filename,$_POST["t7"]);
    echo "Produit ajouter avec succes";

 header("location:afficherProduit.php");
}
else
{
    echo "vérifier les champs";
}

?>