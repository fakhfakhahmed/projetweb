<?php
include "../CoolAdmin-master/inc/panierC.php";
if(isset($_POST["idP"]))
{
    $f=new panierC();
    $f->supppan($_POST["idP"]);
    header("location:cart1.php");
}

?>