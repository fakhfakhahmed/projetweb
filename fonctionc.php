<?PHP

class fonctionc
{

	function ajouterclient($client)
	{
        $username=$client->getusername();
        $nom=$client->getNom();
        $prenom=$client->getPrenom();
        $mdp=$client->getmdp();
        $email=$client->getemail();
        $tel=$client->gettel();

				$host=mysqli_connect("localhost", "root", "")or die("cannot connect");
				mysqli_select_db($host,"sisagri2")or die("cannot select DB");



				$sql="INSERT INTO client (username, nom, prenom,email , mdp,tel,dateinscri) VALUES ('$username', '$nom', '$prenom','$email','$mdp','$tel',NOW())";
        $sql1="select * from client where email='$email'";
				$req1=mysqli_query($host,$sql1);
				if(mysqli_num_rows($req1)==0)
				{
				$req=mysqli_query($host,$sql);
				header('Location: ../../index.php');
			}
			else{echo'email existe';
			}

	}
		function autheclient($client)
	{
		    $username=$client->getusername();
        	$nom=$client->getNom();
        	$prenom=$client->getPrenom();
        	$mdp=$client->getmdp();
        	$email=$client->getemail();
        	$tel=$client->gettel();

 			$host=mysqli_connect("localhost", "root", "")or die("cannot connect");
			mysqli_select_db($host,"sisagri2")or die("cannot select DB");



			$sql="select * from client  where ((email='$email') and(mdp='$mdp') and (etat=0))";

			$req=mysqli_query($host,$sql);

			$sql1="select * from client  where ((email='$email') and(mdp='$mdp') and (etat=1))";

			$req1=mysqli_query($host,$sql1);

		if ((mysqli_num_rows($req)==1))
		 {echo'connected';
       session_start();
			 $_SESSION['email']=$email;
			 $_SESSION['password']=$mdp;
			 header('Location: ../../index.php');



		 }

		 elseif((mysqli_num_rows($req1)==1)){
			 echo'bloquer';

		 }
		 else{echo'invalide';

		 }

	}

	function modifierclient($client,$hethi)
	{


				$mdp=$client->getmdp();

				$tel=$client->gettel();

				$host=mysqli_connect("localhost", "root", "")or die("cannot connect");
				mysqli_select_db($host,"sisagri2")or die("cannot select DB");



				$sql="UPDATE `client` SET  `mdp` = '$mdp' WHERE `client`.`email` = '$hethi';
;";

				$req=mysqli_query($host,$sql);



	}
	/*function afficher_livraison($client)
	{
		$username=$client->getusername();
		$nom=$client->getNom();
		$prenom=$client->getPrenom();
		$mdp=$client->getmdp();
		$email=$client->getemail();
		$tel=$client->gettel();

		$host=mysqli_connect("localhost", "root", "")or die("cannot connect");
		mysqli_select_db($host,"sisagri2")or die("cannot select DB");
		$sql="select date_depart,date_arrive,orderld from livraison,(select * from client where (email='$email')  and (etat=0)) as tab  where livraison.username=tab.username order by date_arrive ASC";
		$req=mysqli_query($host,$sql);
		return $req;
	 	
	}*/
	/*function afficherpanier()
    {
        $ip_a=gethostbyname(gethostname());
        $sql="select * from sisagri2.panier where ip_add='$ip_a'";
        /*$db = config::getConnexion();
        try
        {
            $list=$db->query($sql);
            return $list;
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
		}
	}*/

    
}
	?>