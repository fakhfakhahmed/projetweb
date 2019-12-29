<?php
$FullName = $_POST['FullName'];
$Adress = $_POST['Adress'];
$Email = $_POST['Email'];
$PhoneNumber = $_POST['PhoneNumber'];
$Message = $_POST['Message'];

	$host = "localhost";
  	$dbUsername = "root";
   	$dbPassword = "";
   	$dbname = "sisagri2";
   	//create connection
    $conn = new mysqli('localhost', 'root', '', 'sisagri2');
    if ($conn->connect_error) {
      die('Connection Failed : '.$conn->connect_error);
    }
    else{
     	$stmt = $conn->prepare("insert into Complaint(FullName, Adress, Email, PhoneNumber, Message) values(?, ?, ?, ?, ?)");
     	$stmt->bind_param("sssis", $FullName, $Adress, $Email, $PhoneNumber, $Message);
     	$stmt->execute();
	    /////////////////////////////////////

              require 'send/PHPMailerAutoload.php';
              require 'send/credential.php';

              $mail = new PHPMailer;

             //  $mail->SMTPDebug = 4;                           // Enable verbose debug output

              $mail->isSMTP();                                      // Set mailer to use SMTP
              $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
              $mail->SMTPAuth = true;                               // Enable SMTP authentication
              $mail->Username = EMAIL;                 // SMTP username
              $mail->Password = PASS;                           // SMTP password
              $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
              $mail->Port = 587;                                    // TCP port to connect to

              $mail->setFrom(EMAIL,'sisagri');
              $mail->addAddress($_POST['Email']);   // Add a recipient

              $mail->addReplyTo(EMAIL);
              // print_r($_FILES['file']); exit;
              /*for ($i=0; $i < count($_FILES['file']['tmp_name']) ; $i++) { 
                $mail->addAttachment($_FILES['file']['tmp_name'][$i], $_FILES['file']['name'][$i]);    // Optional name
              }*/
              $mail->isHTML(true);                                  // Set email format to HTML

              $mail->Subject = 'We recived your complaint and we are currently treating the problem '; 
              //$mail->Body    = '<div style="border:2px solid blue;"> thanks for ordering &transaction id='.$tId.'</br> &quantite'.$objtrans->getQuantity().'<b></br> amount</b>'.$objtrans->getAmount().'</div>';

              $mail->Body ='  Your complaint has been sent We will get in touch with you shortly' ;


              $mail->AltBody = ' thanks for Reaching to us ';

              if(!$mail->send()) {
                  echo 'Message could not be sent.';
                  echo 'Mailer Error: ' . $mail->ErrorInfo;
              } else {
                  echo ' </br> commande confirmation Message has been sent </br>';
              }


      //////////////////////////////////// 
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
