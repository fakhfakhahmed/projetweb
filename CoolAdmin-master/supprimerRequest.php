<?PHP
include "inc/RequestC.php";
$RequestC=new RequestC();
if (isset($_POST["ID_Request"])){
	$RequestC->supprimerRequest($_POST["ID_Request"]);
	header('Location: afficherRequest.php');
}

?>