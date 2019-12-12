<?php

include "../CoolAdmin-master/inc/fonctionC.php";
if (isset($_POST["uemail"])) {
    $f = new fonctionC();
    $f->addFromCart($_POST["uemail"]);
   header("location:cart1.php");
}
