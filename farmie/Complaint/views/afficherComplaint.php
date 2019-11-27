<?php


include '../core/ComplaintC.php';
$Cmplnt = new ComplaintC();
$listComplaint = $Cmplnt->afficherComplaint();
?>
<body>
   <link rel="stylesheet" type="text/css" href="../css/afficherComplaint.css">
  <div class="header">Users</div>
<table  cellspacing="0">
    <tr>
        <th>ID_Complaint</th>
        <th>FullName</th>
        <th>Adress</th>
        <th>Email</th>
        <th>PhoneNumber</th>
        <th>Message</th>
        <th>Reply</th>
    </tr>
<?php

foreach ($listComplaint as $row)
{
    echo '
        <tr>
            <td>'.$row["ID_Complaint"].'</td>
            <td>'.$row["FullName"].'</td>
            <td>'.$row["Adress"].'</td>
            <td>'.$row["Email"].'</td>
            <td>'.$row["PhoneNumber"].'</td>
            <td>'.$row["Message"].'</td>
            <td>
                <form action="#">
                    <input type="hidden" id="ID_Complaint" name="ID_Complaint" value="'.$row["ID_Complaint"].'">
                    <input type="hidden" id="FullName" name="FullName" value="'.$row["FullName"].'">
                    <input type="hidden" id="pre" name="pre" value="'.$row["Email"].'">
                    <input type="hidden" id="dat" name="dat" value="'.$row["Adress"].'">
                    <input type="hidden" id="nbc" name="nbc" value="'.$row["PhoneNumber"].'">
                    <input type="hidden" id="Message" name="Message" value="'.$row["Message"].'">
                    <input style="background: none; border: none; text-decoration: underline;" type="submit" value="Reply">
                </form>
            </td>
        </tr>
    ';
}
?>
</table>
