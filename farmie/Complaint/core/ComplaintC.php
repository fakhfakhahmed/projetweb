<?php

include "../config.php";
class ComplaintC
{
  
    function afficherComplaint()
    {

        $sql="select * from sisagri.complaint order by ID_Complaint asc";

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