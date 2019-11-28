<?PHP
include "../client.php";
include "../fonctionC.php";

if (isset($_POST['email']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['user']) and isset($_POST['pwd']) and isset($_POST['phone'])){
$client=new client($_POST['user'],$_POST['nom'],$_POST['prenom'],$_POST['pwd'],$_POST['email'],$_POST['phone']);

$fonctionc=new fonctionC();

$fonctionc->ajouteradmin($client);

header('Location: ../../afficheradmin.php');

}
else{
	echo "vérifier les champs";
}


?>
