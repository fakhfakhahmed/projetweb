<?php
$FullName = $_POST['FullName'];
$Adress = $_POST['Adress'];
$Email = $_POST['Email'];
$PhoneNumber = $_POST['PhoneNumber'];
$Message = $_POST['Message'];

	$host = "localhost";
  	$dbUsername = "root";
   	$dbPassword = "";
   	$dbname = "sisagri";
   	//create connection
    $conn = new mysqli('localhost', 'root', '', 'sisagri');
    if ($conn->connect_error) {
      die('Connection Failed : '.$conn->connect_error);
    }
    else{
     	$stmt = $conn->prepare("insert into Complaint(FullName, Adress, Email, PhoneNumber, Message) values(?, ?, ?, ?, ?)");
     	$stmt->bind_param("sssis", $FullName, $Adress, $Email, $PhoneNumber, $Message);
     	$stmt->execute();
     	header("Location: Complaint.php?Complaintsent");
     	$stmt->close();
     	$conn->close();
     }
     /*<?php

if (isset($_POST['submit'])) {
$name = $_POST['name'];
$subject = $_POST['subject'];
$mailFrom = $_POST['mail'];
$message = $_POST['message'];

$mailTo = "RandomUser1@gmail.com";
$headers = "From: ".$mailFrom;
$txt = "You have received an e-mail from ".$name.".\n\n".$message;

mail($mailTo, $subject, $txt, $headers);
header("Location: index.php?mailsend");
}*/

?>