<?PHP
include "../client.php";
include "../fonctionc.php";

if (isset($_POST['email']) AND isset($_POST['pass'])){
$client=new client(NULL,NULL,NULL,$_POST['pass'],$_POST['email'],NULL);

$fonctionC=new fonctionC();

$fonctionC->autheadmin($client);


}
else{
	echo "vérifier les champs";
}


?>
