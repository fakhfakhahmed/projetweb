<?php

include "../CoolAdmin-master/inc/fonctionC.php";
if (isset($_POST["idP"]) and isset($_POST["qty"])) {
    $f = new fonctionC();
    $f->modifierpanier($_POST["idP"],$_POST["qty"]);
    header("location:cart1.php");
}
