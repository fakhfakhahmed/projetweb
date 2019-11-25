<?php
include "inc/fonctionC.php";

$nom_cat=$_POST["nom"];


$id_categorie=$_POST["idcat"];



$prodC=new fonctionC();
$prodC->modifierCatego($id_categorie,$nom_cat);
header("location:afficheCategorie.php");

?>
