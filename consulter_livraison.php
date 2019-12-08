<?PHP
include 'inc/consulterlivraison.php';
include 'inc/fonctionc.php';

if (isset($_POST['nom'])){
$consul=new consulter($_POST['nom']);

$fonctionc=new fonctionc();
$x=$fonctionc->consulterlivraison($consul);
//echo $x;
if($x==0)
{
	header("location:afficherconsultation.php"); 
}
else if($x==2)
{
	echo 'bloquer';
}
else
{
	echo'invalide';
}
}
?>
