<?php

include "../CoolAdmin-master/inc/panierC.php";
if (isset($_POST["uemail"])) {
    $f = new panierC();
    $f->addFromCart($_POST["uemail"]);
    header("location:cart1.php");
}

