<?PHP
include "../client.php";
include "../fonctionc.php";

if (isset($_POST['email']) and isset($_POST['name']) and isset($_POST['lastname']) and isset($_POST['user']) and isset($_POST['pass']) and isset($_POST['phone'])){
$client=new client($_POST['user'],$_POST['name'],$_POST['lastname'],$_POST['pass'],$_POST['email'],$_POST['phone']);

$fonctionc=new fonctionc();

$fonctionc->ajouterclient($client);



}
else{
	echo "vérifier les champs";
}


?>
