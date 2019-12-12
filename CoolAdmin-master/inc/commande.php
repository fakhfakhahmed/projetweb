<?php

{
class commande{
    private $id_commande;

    private $id_produit;
    private $quantite;
    private $prix;
    private $id_client;
    private $date ;

    function __construct($id_produit,$quantite,$prix,$id_client,$date){

        $this->id_produit=$id_produit;
        $this->quantite=$quantite;
        $this->prix=$prix;
        $this->id_client=$id_client;
        $this->date=$date;

    }
    function getid_commande(){
        return $this->id_commande;
    }
    function getid_produit(){
        return $this->id_produit;
    }
    function getquantite(){
        return $this->quantite;
    }
    function getprix(){
        return $this->prix;
    }
    function getid_client(){
        return $this->id_client;
    }
    function getdate(){
        return $this->date;
    }



    function setid_produit($id_produit){
        $this->id_produit=$id_produit;
    }
    function setquantite($quantite){
        $this->quantite=$quantite;
    }
    function setid_client($id_client){
        $this->id_client=$id_client;
    }
    function setprix($prix){
        $this->prix=$prix;
    }
    function setdate($date){
        $this->date=$date;
    }


}

}
