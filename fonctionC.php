<?php

include "config.php";
class fonctionC
{
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
    function afficherProduit($id_cat=null)
    {

        $sql="select * from produits";
        if ($id_cat!=null)
        {
            $sql=$sql." where id_categorie = '$id_cat'";
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




	function supprimerclient($client)
	{
				$username=$client->getusername();


				$host=mysqli_connect("localhost", "root", "")or die("cannot connect");
				mysqli_select_db($host,"sisagri2")or die("cannot select DB");



				$sql="DELETE FROM `client` WHERE `client`.`username` = '$username'";

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

    function ajouterLivreur($livreur)
    {
        $sql= " INSERT INTO sisagri2.livreur (id_livreur, nom, prenom, etat, matricule, adresse, tel) VALUES
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
        $sql= " INSERT INTO sisagri2.livraison (date_depart, date_arrive,username ,id_livreur, id_commande) VALUES
         (:date_depart, :date_arrive, :id_client, :id_livreur, :id_commande )";
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

        $sql="select * from livraison ";
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
        $sql="UPDATE sisagri2.livraison set date_depart='$date_depart', date_arrive='$date_arriver',username='$id_client',id_livreur='$id_livreur',id_commande='$id_commande' where id_livraison='$id_livraison'";
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
    function afficherCommande()
    {

        $sql="SELECT * from sisagri2.commande";
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

}

?>
