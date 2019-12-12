<?php

include "./config2.php";
class RequestC
{

    function afficherRequest()
    {

        $sql="select * from sisagri2.helprequest order by ID_Request asc";

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
        function supprimerRequest($ID_Request){
            $sql="DELETE FROM helprequest where ID_Request= :ID_Request";
            $db = config::getConnexion();
            $req=$db->prepare($sql);
            $req->bindValue(':ID_Request',$ID_Request);
            try{
                $req->execute();
               // header('Location: index.php');
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }

}
