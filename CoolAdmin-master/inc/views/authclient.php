<?PHP
include "../client.php";
include "../fonctionC.php";

if (isset($_POST['email']) AND isset($_POST['pass'])){
$client=new client('aa','aa','aa',$_POST['pass'],$_POST['email'],'aa');

$fonctionc=new fonctionc();

$fonctionc->autheclient($client);



}
else{
	echo "vérifier les champs";
}


?>
