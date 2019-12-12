<?PHP
include "inc/livreur.php";
include "inc/fonctionC.php";

if(isset($_POST['id']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['etat']) and isset($_POST['matricule']) and isset($_POST['adresse']) and isset($_POST['tel']))
{
	$livreur1=new Livreur(($_POST['id']),($_POST['nom']),($_POST['prenom']),($_POST['etat']),($_POST['matricule']),($_POST['adresse']),($_POST['tel']));
	//Partie2
	/*
	var_dump($employe1);
	}
	*/
	//Partie3
	$livreur1C=new fonctionC();
	$livreur1C->ajouterLivreur($livreur1);
	header('Location: afficherlivreur.php');
}
else
{
	echo "vérifier les champs";
}
//*/

?>