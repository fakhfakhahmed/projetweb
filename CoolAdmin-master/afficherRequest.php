<?php
include 'inc/header.php';
include 'inc/RequestC.php';
$Rqust = new RequestC();
$listResquest = $Rqust->afficherRequest();
?>
<body>
   <link rel="stylesheet" type="text/css" href="css/afficherComplaint.css">
  <div style="margin-top: 80px;" class="header">Help Requests</div>
<table  cellspacing="0">
    <tr>
        <th>ID_Request</th>
        <th>FullName</th>
        <th>Adress</th>
        <th>Email</th>
        <th>PhoneNumber</th>
        <th>Product Name</th>
        <th>Purchase Date</th>
        <th>Premuim member</th>
        <th>Delete</th>
    </tr>

<?php

foreach ($listResquest as $row)
{
    echo '
        <tr>
            <td>'.$row["ID_Request"].'</td>
            <td>'.$row["FullName"].'</td>
            <td>'.$row["Adress"].'</td>
            <td>'.$row["Email"].'</td>
            <td>'.$row["PhoneNumber"].'</td>
            <td>'.$row["ProductName"].'</td>
            <td>'.$row["PurchaseDate"].'</td>
            <td>'.$row["PremiumMember"].'</td>
            <td>
                <form action="supprimerRequest.php" method="POST">
                    <input type="hidden" id="ID_Request" name="ID_Request" value="'.$row["ID_Request"].'">
                    <input type="hidden" id="FullName" name="FullName" value="'.$row["FullName"].'">
                    <input type="hidden" id="dat" name="dat" value="'.$row["Adress"].'">
                    <input type="hidden" id="pre" name="pre" value="'.$row["Email"].'">
                    <input type="hidden" id="nbc" name="nbc" value="'.$row["PhoneNumber"].'">
                    <input type="hidden" id="nbc" name="nbc" value="'.$row["ProductName"].'">
                    <input type="hidden" id="nbc" name="nbc" value="'.$row["PhoneNumber"].'">
                    <input type="hidden" id="nbc" name="nbc" value="'.$row["PremiumMember"].'">
                        <input style="background: none; border: none; text-decoration: underline;" type="submit" name="supprimer" value="Delete">
                        <input type="hidden" value="'.$row['ID_Request'].'" name="ID_Request">
                  
                </form>
            </td>
        </tr>
    ';
}


?>
</table>
