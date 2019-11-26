<?PHP
include "../client.php";
include "../fonctionc.php";


$client=new client(NULL,NULL,NULL,NULL,$_GET['email'],NULL);

$fonctionc=new fonctionc();

if($_GET['etat']==1)
{
$fonctionc->bloquerclient($client,0);
}
else {
  $fonctionc->bloquerclient($client,1);

}
header('Location:../../afficherclient.php');





?>
