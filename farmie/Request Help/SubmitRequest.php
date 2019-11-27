<?php
$FullName = $_POST['FullName'];
$Adress = $_POST['Adress'];
$Email = $_POST['Email'];
$PhoneNumber = $_POST['PhoneNumber'];
$ProductName = $_POST['ProductName'];
$PurchaseDate = $_POST['PurchaseDate'];
$PremiumMember = $_POST['PremiumMember'];
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
     	$stmt = $conn->prepare("insert into helprequest(FullName, Adress, Email, PhoneNumber, ProductName, PurchaseDate, PremiumMember) values(?, ?, ?, ?, ?, ?, ?)");
     	$stmt->bind_param("sssisss", $FullName, $Adress, $Email, $PhoneNumber, $ProductName, $PurchaseDate, $PremiumMember);
     	$stmt->execute();
      header("Location: HelpRequest.php?HelpOnTheWay");
     	$stmt->close();
     	$conn->close();
     }
   ?>