<?php
include "inc/fonctionC.php";

$nom=$_POST["nom"];
$prix=$_POST["prix"];
$description=$_POST["description"];
$id_categorie=$_POST["cat"];
$img_1=$_POST["img_1"];
$id_produit=$_POST["idprod"];
$stock=$_POST["stock"];
$key_word=$_POST["key_word"];


$prodC=new fonctionC();
$prodC->modifierProduit($id_produit,$nom,$prix,$description,$id_categorie,$stock,$img_1,$key_word);
header("location:afficherProduit.php");

?>
