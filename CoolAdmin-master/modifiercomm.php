<?php
include "inc/fonctionC.php";

$orderId=$_POST["orderId"];
$uemail=$_POST["uemail"];
$innoviceNumber=$_POST["innoviceNumber"];
$prodId=$_POST["prodId"];
$qty=$_POST["qty"];
$status=$_POST["status1"];

$comC=new fonctionC();
$comC->modifierCommande($orderId,$uemail,$innoviceNumber,$prodId,$qty,$status);
header("location:affichercommande.php");

?>
