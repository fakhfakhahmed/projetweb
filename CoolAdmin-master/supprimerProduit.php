<?php
include "inc/fonctionC.php";

$ref=$_POST["supp"];

$crimC = new fonctionC();
$crimC->suppProd($ref);

header("location:afficherProduit.php");




