<?php

{
    class panier{

        private $id_produit;
        private $ip_add;
        private $qty ;

        function __construct($id_produit,$ip_add,$qty){

            $this->id_produit=$id_produit;
            $this->ip_add=$ip_add;
            $this->qty=$qty;
        }
        function getid_produit(){
            return $this->id_produit;
        }
        function getip_add(){
            return $this->ip_add;
        }
        function getqty(){
            return $this->qty;
        }


        function setip_add($ip_add){
            $this->ip_add=$ip_add;
        }
        function setqty($qty){
            $this->qty=$qty;
        }


    }

}
