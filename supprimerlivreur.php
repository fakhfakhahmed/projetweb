<?PHP
include "inc/fonctionC.php";

$id_livreur=$_POST["id"];
$livreurC=new fonctionC();
$livreurC->suppLivreur($id_livreur);
header('Location:afficherlivreur.php');

?>