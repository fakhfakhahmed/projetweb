<?PHP
include "inc/fonctionC.php";
$livraisonC=new fonctionC();
if (isset($_POST["id_livraison"])){
	$livraisonC->suppLivraison($_POST["id_livraison"]);
	header('Location:afficherLivraison.php');
}

?>