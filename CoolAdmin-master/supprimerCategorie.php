<?php
include "inc/fonctionC.php";

$ref=$_POST["supp"];

$crimC = new fonctionC();
$crimC->suppcat($ref);

header("location:afficheCategorie.php");


