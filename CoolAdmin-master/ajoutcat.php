<?php
include "inc/categorie.php";
include "inc/fonctionC.php";
if(isset($_POST["nom"]))
{
    $cri=new categorie ($_POST["nom"]);
    $criC=new fonctionC();
    $criC->ajouterCat($cri);
    header("location:afficheCategorie.php");
}
else
{
    echo "Ref Déja Utilisé";
}
?>