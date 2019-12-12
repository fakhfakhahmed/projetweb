<?php
include "inc/fonctionC.php";

$orderId=$_POST["orderId"];
$status=$_POST["status1"];

$comC=new fonctionC();
$comC->modifierCommande($orderId,$status);
header("location:affichercommande.php");

?>
