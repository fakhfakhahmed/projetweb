<?php
include "inc/commandeC.php";

$ref=$_POST["supp"];

$comC = new commandeC();
$comC->suppCom($ref);

header("location:affichercommande.php");
