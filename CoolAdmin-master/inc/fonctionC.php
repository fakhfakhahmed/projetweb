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

}

?>