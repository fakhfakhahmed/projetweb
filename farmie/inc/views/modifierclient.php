<?PHP
include "../client.php";
include "../fonctionc.php";
session_start();
if (isset($_POST['pass'])  ){
$client=new client(NULL,NULL,NULL,$_POST['pass'],$_SESSION['email'],NULL);

$fonctionc=new fonctionc();

$fonctionc->modifierclient($client,$_SESSION['email']);

header('Location: ../../index.php');

}
else{
	echo "vérifier les champs";
}


?>
