<?php
include 'config.php';
class fonctionC
{
  function ajouterCom($com)
    {
        $sql= "insert into sisagri2.commande(id_produit,quantite,prix,id_client,date) values (:id_produit,:quantite,:prix,:id_client,:date)";
        $db = config::getConnexion();
        try
        {
            $req=$db->prepare($sql);

            $id_produit=$com->getid_produit();
            $quantite=$com->getquantite();
            $prix=$com->getprix();
            $id_client=$com>getid_client();
            $date=$categorie->getdate();



            $req->bindValue(':id_produit',$id_produit);
            $req->bindValue(':quatite',$quantite);
            $req->bindValue(':prix',$prix);
            $req->bindValue(':id_client',$id_client);
            $req->bindValue(':date',$date);



            $req->execute();

        }
        catch (Exception $e)
        {
            die('Erreur: Un criminel avec ce cin existe deja');

        }

    }
    function afficherCom()
    {

        $sql="select * from sisagri2.commande";
        $db = config::getConnexion();
        try
        {
            $list=$db->query($sql);
            return $list;
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }
    function suppcom($orderId)
    {
        $sql="DELETE FROM sisagri2.commande WHERE orderId LIKE '$orderId' ";

        $db = config::getConnexion();
        try
        {
            $db->query($sql);
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }
  function modifierCommande($orderId,$status1)
    {
        $sql= "update sisagri2.commande set Status='$status1'  where orderId='$orderId'";
        $db = config::getConnexion();
        try
        {
            $db->query($sql);
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }
    function ajouterpanier($id_produit)
    {
        $sql = "insert into sisagri2.panier(id_produit,ip_add,qty) values (:id_produit,:ip_add,:qty)";
        $db = config::getConnexion();
        try {
            $req = $db->prepare($sql);
            $ip_add = gethostbyname(gethostname());
            $qty = 1;


            $req->bindValue(':id_produit', $id_produit);
            $req->bindValue(':ip_add', $ip_add);
            $req->bindValue(':qty', $qty);


            $req->execute();

        }
        catch (Exception $e) {
            if($e->getCode()==23000)
            {
                $sql2="update sisagri2.panier set qty=qty+1 where id_produit='$id_produit'";
                $db = config::getConnexion();
                try {
                    $db->query($sql2);

                }
                catch (Exception $e) {
                    echo "error: ".$e->getMessage();

                }
            }
        }

    }

    function getSoldeF($un)
        {
            $sql="select * from fidelite where username='$un'";
            $db=config::getConnexion();
            try
            {
                return $db->query($sql)->fetch();
            }
            catch (Exception $e)
            {
                echo 'error :'.$e->getMessage();
            }
        }

    function afficherpanier()
    {
        $ip_a=gethostbyname(gethostname());
        $sql="select * from sisagri2.panier where ip_add='$ip_a'";
        $db = config::getConnexion();
        try
        {
            $list=$db->query($sql);
            return $list;
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }

    }
    function supppan($id_produit)
    {
        $sql="DELETE FROM sisagri2.`panier` WHERE id_produit = '$id_produit' ";

        $db = config::getConnexion();
        try
        {
            $db->query($sql);
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }
    function modifierpanier($id_produit,$qty)
    {
        $sql= "update sisagri2.panier set qty='$qty' where id_produit='$id_produit'";
        $db = config::getConnexion();
        try
        {
            $db->query($sql);
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }

    function getprod($id_prod)
    {
        $sql = "SELECT * FROM sisagri2.produits WHERE id_produit='$id_prod'";
        $db = config::getConnexion();
        try {
            return $db->query($sql)->fetch();

        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    function addFromCart($uemail)
    {
        $ipA=gethostbyname(gethostname());
        $l=$this->afficherpanier($ipA);
        $x=random_int(1000000,9999999);//innovice number
        $v=0;
        $n=0;
        foreach ($l as $p)
        {
            $pId=$p["id_produit"];
            $qty=$p["qty"];
            $prod=$this->getprod($pId);
            $v=$v+$prod["prix"]*$qty;
            $n=$n+$qty;
            // ta3ti num fatoura lkol produit fel panier
            $sql="insert into sisagri2.produits_commande (uemail, innoviceNumber, prodId, qty) values ('$uemail','$x','$pId','$qty')";
            $sql4="update sisagri2.produits set stock =stock-'$qty' where id_produit='$pId' ";
            $db=config::getConnexion();
            try
            {
                $db->query($sql);
                $db->query($sql4);
            }
            catch (Exception $e)
            {
                echo 'error :'.$e->getMessage();
            }


        }
        //getsolde fid

        $fid=$this->getSoldeF($uemail)["solde"];
            $due=$v+10;
            echo 'due'.$v;
            $dis=0;
        if($fid<$v)
        {
            $v=$v-$fid;
            $dis=$fid;
            $fid=0;
        }
        else
        {
            $fid=$fid-$v;
            $dis=$v;
            $v=0;
        }
        $sql5="update fidelite set solde='$fid' where username='$uemail'";
            $db=config::getConnexion();
        try
        {
            $db->query($sql5);
        }
        catch (Exception $e)
        {
            echo 'error :'.$e->getMessage();
        }
        echo 'salem'.$dis;
        // aaa ta3mel commande fiha num el fatoura
        $sql2="insert into sisagri2.commande (uemail, dueAmount, innoNumber, totalQty,discount) values ('$uemail','$v','$x','$n','$dis')";
        echo $sql2;
        try
        {
            $db->query($sql2);
        }
        catch (Exception $e)
        {
            echo 'error :'.$e->getMessage();
        }
        $sql3="delete from sisagri2.panier where ip_add='$ipA'";
        try
        {
            $db->query($sql3);
        }
        catch (Exception $e)
        {
            echo 'error :'.$e->getMessage();
        }
        $sql4="update fidelite set solde=solde+'$due'*0.08 where username='$uemail'";
        try
        {
            $db->query($sql4);
        }
        catch (Exception $e)
        {
            echo 'error :'.$e->getMessage();
        }
    }
    function ajouterCat($categorie)
    {
        $sql= "insert into sisagri2.categories(nom_cat) values (:nom)";
        $db = config::getConnexion();
        try
        {
            $req=$db->prepare($sql);

            $nom=$categorie->getNomCat();



            $req->bindValue(':nom',$nom);


            $req->execute();

        }
        catch (Exception $e)
        {
            die('Erreur: Un criminel avec ce cin existe deja');

        }

    }
    function afficherCategorie()
    {

        $sql="select * from sisagri2.categories ";
        $db = config::getConnexion();
        try
        {
            $list=$db->query($sql);
            return $list;
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }
    function suppcat($id_categorie)
    {
        $sql="DELETE FROM sisagri2.`categories` WHERE id_categorie LIKE '$id_categorie' ";
        echo $sql;
        $db = config::getConnexion();
        try
        {
            $db->query($sql);
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }
    function modifierCatego($id_categorie,$nom_cat)
    {
        $sql="update sisagri2.categories set nom_cat='$nom_cat' where id_categorie='$id_categorie'";
        $db = config::getConnexion();
        try
        {
            $db->query($sql);
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }
    function ajouterProduit($id_cat,$nom,$pri,$desc,$stck,$img,$kw)
    {
        $sql= "insert into sisagri2.produits(id_categorie,nom,prix,description,stock,img_1,key_word) values ('$id_cat','$nom','$pri','$desc','$stck','$img','$kw')";
        $db = config::getConnexion();
        try
        {
           $db->query($sql);

        }
        catch (Exception $e)
        {
            echo 'Erreur: '.$e->getMessage();
        }

    }
    function afficherProduit($id_cat=null,$key=null,$dd=null)
    {

        $sql="select * from produits";
        if ($id_cat!=null)
        {
            $sql=$sql." where id_categorie = '$id_cat'";
        }
        if ($key!=null)
        {
            $sql=$sql." where key_word like '%$key%' limit 4";
        }
        if($dd!=null)
        {
            $sql="select * from sisagri2.produits where stock =0";
        }
        $db = config::getConnexion();
        try
        {
            $list=$db->query($sql);
            return $list;
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }


    function suppProd($id_produit)
    {
        $sql="DELETE FROM sisagri2.`produits` WHERE id_produit LIKE '$id_produit' ";
        echo $sql;
        $db = config::getConnexion();
        try
        {
            $db->query($sql);
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }
    function modifierProduit($id_produit,$nom,$prix,$description,$id_categorie,$stock,$key_word,$img_1=null)
    {
        if ($img_1==null)
        {
            $sql="update sisagri2.produits set nom='$nom', prix='$prix', description='$description',id_categorie='$id_categorie',key_word='$key_word',stock='$stock' where id_produit='$id_produit'";
        }
    else
        {
            $sql="update sisagri2.produits set nom='$nom', prix='$prix', description='$description',id_categorie='$id_categorie',key_word='$key_word',stock='$stock',img_1='$img_1' where id_produit='$id_produit'";
        }
        $db = config::getConnexion();
        try
        {
            $db->query($sql);
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }
    function ajouteradmin($client)
	{
        $username=$client->getusername();
        $nom=$client->getNom();
        $prenom=$client->getPrenom();
        $mdp=$client->getmdp();
        $email=$client->getemail();
        $tel=$client->gettel();

				$host=mysqli_connect("localhost", "root", "")or die("cannot connect");
				mysqli_select_db($host,"sisagri2")or die("cannot select DB");
				$sql="INSERT INTO admin (username, nom, prenom,email , mdp,tel) VALUES ('$username', '$nom', '$prenom','$email','$mdp','$tel')";

				$req=mysqli_query($host,$sql);
				if($req)
				{
					echo 'added';

				}
				else
				{
					echo 'mail invalid';
				}
}

function autheadmin($client)
{

      $mdp=$client->getmdp();
      $email=$client->getemail();


  $host=mysqli_connect("localhost", "root", "")or die("cannot connect");
  mysqli_select_db($host,"sisagri2")or die("cannot select DB");



  $sql="select * from admin  where ((email='$email') and(mdp='$mdp')) ";

  $req=mysqli_query($host,$sql);



if (mysqli_num_rows($req)==1)
 {echo'connected';
   session_start();
  $row=mysqli_fetch_array($req,MYSQLI_NUM);
  $_SESSION['mail']=$email;
  $_SESSION['pass']=$mdp;
  $_SESSION['type']=$row[6];
  $_SESSION['name']=$row[1];
  $_SESSION['usernamee']=$row[0];
  $_SESSION['lastname']=$row[2];
  $_SESSION['tel']=$row[5];
 header('Location: ../../index.php');
 }
 else{header('Location: ../../erreur.php');

 }

}


function supprimeradmin($client)
{
      $username=$client->getusername();


      $host=mysqli_connect("localhost", "root", "")or die("cannot connect");
      mysqli_select_db($host,"sisagri2")or die("cannot select DB");



      $sql="DELETE FROM `admin` WHERE `admin`.`username` = '$username'";

      $req=mysqli_query($host,$sql);



}


	function supprimerclient($client)
	{
				$username=$client->getusername();


				$host=mysqli_connect("localhost", "root", "")or die("cannot connect");
				mysqli_select_db($host,"sisagri2")or die("cannot select DB");



				$sql="DELETE FROM `client` WHERE `client`.`username` = '$username'";

				$req=mysqli_query($host,$sql);



	}
  function bloqueradmin($client,$etat)
  {
        $email=$client->getemail();


        $host=mysqli_connect("localhost", "root", "")or die("cannot connect");
        mysqli_select_db($host,"sisagri2")or die("cannot select DB");

        $sql="UPDATE `admin` SET `etat` = '$etat' WHERE `admin`.`email` = '$email';";

       $req=mysqli_query($host,$sql);



  }

	function bloquerclient($client,$etat)
	{
				$email=$client->getemail();


				$host=mysqli_connect("localhost", "root", "")or die("cannot connect");
				mysqli_select_db($host,"sisagri2")or die("cannot select DB");

				$sql="UPDATE `client` SET `etat` = '$etat' WHERE `client`.`email` = '$email';";

 			 $req=mysqli_query($host,$sql);



	}
    function afficherDesc($desc)
    {

        $sql="select * from produits where id_produit = '$desc'  ";

        $db = config::getConnexion();
        try
        {
            $list=$db->query($sql);
            return $list;
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }
    function afficher_livraison($client)
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
	 	
	}
function ajouterLivreur($livreur)
    {
        $sql= " INSERT INTO livreur (id_livreur, nom, prenom, etat, matricule, adresse, tel) VALUES
         (:id, :nom, :prenom, :etat , :matricule, :adresse, :tel)";
         $db = config::getConnexion();
        try
        {
            $req=$db->prepare($sql);


            $id_livreur=$livreur->getid_livreur();
            $nom=$livreur->getnom();
            $prenom=$livreur->getprenom();
            $etat=$livreur->getetat();
            $matricule=$livreur->getmatricule();
            $adresse=$livreur->getadresse();
            $tel=$livreur->gettel();

            $req->bindValue(':id',$id_livreur);
            $req->bindValue(':nom',$nom);
            $req->bindValue(':prenom',$prenom);
            $req->bindValue(':etat',$etat);
            $req->bindValue(':matricule',$matricule);
            $req->bindValue(':adresse',$adresse);
            $req->bindValue(':tel',$tel);

            $req->execute();

        }
        catch (Exception $e)
        {
            echo 'Erreur: '.$e->getMessage();
        }

    }
    function afficherLivreur()
    {

        $sql="select * from livreur ";
        $db = config::getConnexion();
        try
        {
            $list=$db->query($sql);
            return $list;
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }

    function afficherLivreurdispo()
    {

        $sql="SELECT * from sisagri2.livreur WHERE livreur.etat='0'";
        $db = config::getConnexion();
        try
        {
            $list=$db->query($sql);
            return $list;
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }

    function suppLivreur($id_livreur)
    {
        $sql="DELETE FROM sisagri2.`livreur` WHERE id_livreur='$id_livreur' ";
        echo $sql;
        $db = config::getConnexion();
        try
        {
            $db->query($sql);
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }
    function modifierLivreur($id_livreur,$nom,$prenom,$etat,$matricule,$adresse,$tel)
    {
        $sql="UPDATE sisagri2.livreur set nom='$nom', prenom='$prenom', etat='$etat', matricule='$matricule',adresse='$adresse',tel='$tel' where id_livreur='$id_livreur'";
        $db = config::getConnexion();
        try
        {
            $db->query($sql);
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }

    function ajouterLivraison($livraison)
    {
        $sql= " INSERT INTO sisagri2.livraison(date_depart, date_arrive, username ,id_livreur, orderld) VALUES (:date_depart, :date_arrive, :id_client, :id_livreur, :id_commande )";
         $db = config::getConnexion();
        try
        {
            $req=$db->prepare($sql);

            //$id_livraison=$livraison->getid_livraison();
            $date_depart=$livraison->getdate_depart();
            $date_arriver=$livraison->getdate_arrive();
            $id_client=$livraison->getid_client();
            $id_livreur=$livraison->getid_livreur();
            $id_commande=$livraison->getid_commande();
            
            //$req->bindValue(':id_livraison',$id_livraison);
            $req->bindValue(':date_depart',$date_depart);
            $req->bindValue(':date_arrive',$date_arriver);
            $req->bindValue(':id_client',$id_client);
            $req->bindValue(':id_livreur',$id_livreur);
            $req->bindValue(':id_commande',$id_commande);
            

            $req->execute();

        }
        catch (Exception $e)
        {
            echo 'Erreur: '.$e->getMessage();
        }

    }
    function afficherLivraison()
    {

        $sql="select * from livraison order by date_arrive ASC ";
        $db = config::getConnexion();
        try
        {
            $list=$db->query($sql);
            return $list;
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }
    function afficherClient()
    {

        $sql="SELECT * from sisagri2.client";
        $db = config::getConnexion();
        try
        {
            $list=$db->query($sql);
            return $list;
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }


    function suppLivraison($id_livraison)
    {
        $sql="DELETE FROM sisagri2.`livraison` WHERE id_livraison='$id_livraison' ";
        echo $sql;
        $db = config::getConnexion();
        try
        {
            $db->query($sql);
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }
    function modifierLivraison($id_livraison,$date_depart,$date_arriver,$id_client,$id_livreur,$id_commande)
    {
        $sql="UPDATE sisagri2.livraison set date_depart='$date_depart', date_arrive='$date_arriver',username='$id_client',id_livreur='$id_livreur',orderld='$id_commande' where id_livraison='$id_livraison'";
        $db = config::getConnexion();
        try
        {
            $db->query($sql);
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }

}

?>
