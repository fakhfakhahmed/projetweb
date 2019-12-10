<?PHP
include "../client.php";
include "../fonctionc.php";


$client=new client($_GET['username'],NULL,NULL,NULL,NULL,NULL);

$fonctionc=new fonctionc();

$fonctionc->supprimeradmin($client);

header('Location:../../afficheradmin.php');





?>
