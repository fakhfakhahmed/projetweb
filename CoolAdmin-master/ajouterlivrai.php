<?PHP
include "inc/livraison.php";
include "inc/fonctionC.php";

if(isset($_POST['date_depart']) and isset($_POST['date_arrive']) and isset($_POST['id_client']) and isset($_POST['id_livreur']) and isset($_POST['id_commande']) )
{
	$livraison1=new Livraison(($_POST['date_depart']),($_POST['date_arrive']),($_POST['id_client']),($_POST['id_livreur']),($_POST['id_commande']));
	//Partie2
	/*
	var_dump($employe1);
	}
	*/
	//Partie3
	$livraison1C=new fonctionC();
	$livraison1C->ajouterLivraison($livraison1);
	session_start();
	$_SESSION['date_depart']=$_POST['date_depart'];
	$_SESSION['date_arrive']=$_POST['date_arrive'];
	$_SESSION['id_client']=$_POST['id_client'];
	$_SESSION['id_livreur']=$_POST['id_livreur'];
	$_SESSION['id_commande']=$_POST['id_commande'];
	include 'envoyermail.php';
	header('Location:afficherlivraison.php');
}
//*/

?>