<?PHP
include "../client.php";
include "../fonctionc.php";

if (isset($_POST['email']) AND isset($_POST['pass'])){
$client=new client('aa','aa','aa',$_POST['pass'],$_POST['email'],'aa');

$fonctionc=new fonctionc();

$fonctionc->authenclient($client);



}
else{
	echo "vérifier les champs";
}


?>
