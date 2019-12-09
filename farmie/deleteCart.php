<?php
include "../CoolAdmin-master/inc/fonctionC.php";
if(isset($_POST["idP"]))
{
    $f=new fonctionC();
    $f->supppan($_POST["idP"]);
    header("location:cart1.php");
}

?>
