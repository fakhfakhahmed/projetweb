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



				$sql="INSERT INTO client (username, nom, prenom,email , mdp,tel) VALUES ('$username', '$nom', '$prenom','$email','$mdp','$tel')";

				$req=mysqli_query($host,$sql);



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
		 }

		 elseif((mysqli_num_rows($req1)==1)){
			 echo'bloquer';
		 }
		 else{echo'invalide';}

	}
	function consulterlivraison($client)
	{
		$username=$client->getusername();
		$host=mysqli_connect("localhost", "root", "")or die("cannot connect");
		mysqli_select_db($host,"sisagri2")or die("cannot select DB");
		$sql="select username from client  where (username='$username'  and etat=0)";

		$req=mysqli_query($host,$sql);

		$sql1="select username from client  where (username='$username' and etat=1)";

		$req1=mysqli_query($host,$sql1);

		if ((mysqli_num_rows($req)==1))
		{
			$sql2="SELECT id_livraison FROM livraison where id_livraison.username='$username'";
			$req2=mysqli_query($host,$sql2);
			if ((mysqli_num($req2)==1))
			{
				echo'commande en cour de livraison ou vous a deja ete livre!!!';
			}
			else
			{
				echo'vous avez pas encore passe de commande';
			}
		}
		 elseif((mysqli_num($req1)==1))
		{
			echo'bloquer';
		}
		 else
		{
			echo'invalide';
		}
	}
}
	?>
