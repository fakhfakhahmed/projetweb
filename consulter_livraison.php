<?PHP
include "../consulterlivraison.php";
include "../fonctionc.php";

if (isset($_POST['username'])){
$consul=new consulter($_POST['username']);

$fonctionc=new fonctionc();
$fonctionc->consulterlivraison($consul);
}
else{
	echo "vérifier les champs";
}


?>
