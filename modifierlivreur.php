<?php
include "inc/fonctionC.php";

$id_livreur=$_POST["id"];
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$etat=$_POST["etat"];
$matricule=$_POST["matricule"];
$adresse=$_POST["adresse"];
$tel=$_POST["tel"];

$livreurC=new fonctionC();
$livreurC->modifierLivreur($id_livreur,$nom,$prenom,$etat,$matricule,$adresse,$tel);
header('Location:afficherlivreur.php');

?>
