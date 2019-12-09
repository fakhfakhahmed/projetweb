<?php
include "inc/fonctionC.php";

$ref=$_POST["supp"];

$comC = new fonctionC();
$comC->suppCom($ref);

header("location:affichercommande.php");
