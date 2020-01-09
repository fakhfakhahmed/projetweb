<?PHP
include "inc/livraison.php";
include "inc/fonctionC.php";

if(isset($_POST['date_depart']) and isset($_POST['date_arrive']) and isset($_POST['id_client']) and isset($_POST['id_livreur']) and isset($_POST['id_commande']) )
{
	$livraison1=new Livraison(($_POST['date_depart']),($_POST['date_arrive']),($_POST['id_client']),($_POST['id_livreur']),($_POST['id_commande']));


	var_dump($employe1);
	}


	$livraison1C=new fonctionC();
	$livraison1C->ajouterLivraison($livraison1);
	header('Location:afficherlivraison.php');
else
{
    echo "verifier les champs";
}

?>