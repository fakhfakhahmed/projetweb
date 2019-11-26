<?php
include "inc/fonctionC.php";
if(isset($_FILES["t6"]))
{

}
else
{
    echo "sszszsz";
    die();
}
$target = "images/";
$target = $target . basename( $_FILES['t6']['name']);
$Filename=basename( $_FILES['t6']['name']);
if(move_uploaded_file($_FILES['t6']['tmp_name'], $target))
{
    //Tells you if its all ok
    echo "The file " . basename($_FILES['t6']['name']) . " has been uploaded, and your information has been added to the directory";
}
$nom=$_POST["nom"];
$prix=$_POST["prix"];
$description=$_POST["description"];
$id_categorie=$_POST["cat"];

$id_produit=$_POST["idprod"];
$stock=$_POST["stock"];
$key_word=$_POST["key_word"];


$prodC=new fonctionC();
if ($Filename=="")
{
    $prodC->modifierProduit($id_produit,$nom,$prix,$description,$id_categorie,$stock,$key_word);
}
else
{
    $prodC->modifierProduit($id_produit,$nom,$prix,$description,$id_categorie,$stock,$key_word,$Filename);
}
header("location:afficherProduit.php");

?>
