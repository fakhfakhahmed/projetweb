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
				mysqli_select_db($host,"sisagri")or die("cannot select DB");



				$sql="INSERT INTO client (username, nom, prenom,email , mdp,tel) VALUES ('$username', '$nom', '$prenom','$email','$mdp','$tel')";

				$req=mysqli_query($host,$sql);



	}
	function authenclient($client)
	{




        $username=$client->getusername();
        $nom=$client->getNom();
        $prenom=$client->getPrenom();
        	$mdp=$client->getmdp();
        $email=$client->getemail();
        $tel=$client->gettel();

 			$host=mysqli_connect("localhost", "root", "")or die("cannot connect");
			mysqli_select_db($host,"sisagri")or die("cannot select DB");



			$sql="select * from client  where ((email='$email') and(mdp='$mdp'))";

			$req=mysqli_query($host,$sql);

		if (mysqli_num_rows($req)==1)
		 {echo'mawjoud';
		 }
		 else
		 {
		 	echo'login and pass incorrect';
		 }
	}
}
	?>
