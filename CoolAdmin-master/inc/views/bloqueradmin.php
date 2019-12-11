<?PHP
include "../client.php";
include "../fonctionc.php";


$client=new client(NULL,NULL,NULL,NULL,$_GET['email'],NULL);

$fonctionc=new fonctionc();

if($_GET['etat']==1)
{
$fonctionc->bloqueradmin($client,0);
}
else {
  $fonctionc->bloqueradmin($client,1);

}
header('Location:../../afficheradmin.php');





?>
