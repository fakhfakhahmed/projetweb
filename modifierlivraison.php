<?php
include "inc/fonctionC.php";

$id_livraison=$_POST["id_livraison"];
$date_depart=$_POST["date_depart"];
$date_arrive=$_POST["date_arrive"];
$id_client=$_POST["id_client"];
$id_livreur=$_POST["id_livreur"];
$id_commande=$_POST["id_commande"];

$livraisonC=new fonctionC();
$livraisonC->modifierLivraison($id_livraison,$date_depart,$date_arrive,$id_client,$id_livreur,$id_commande);
header('location:afficherlivraison.php');

?>
