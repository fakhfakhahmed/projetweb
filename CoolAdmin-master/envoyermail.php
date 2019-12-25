<?php
session_start();
$date_d = $_SESSION['date_depart'];
$date_a = $_SESSION['date_arrive'];
$cl = $_SESSION['id_client'];
$lv = $_SESSION['id_livreur'];
$cd = $_SESSION['id_commande'];

  	/*$host = "localhost";
  	$dbUsername = "root";
   	$dbPassword = "";
   	$dbname = "sisagri2";
   	//create connection
    $conn = new mysqli('localhost', 'root', '', 'sisagri2');
    if ($conn->connect_error) {
      die('Connection Failed : '.$conn->connect_error);
    }
    else{
     	stmt = $conn->prepare("select email from client where username='$cl'");
     	$stmt->bind_param($cl);
      $sql=$stmt->execute();
       
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
              $mail->addAddress($sql);   // Add a recipient

              $mail->addReplyTo(EMAIL);
              // print_r($_FILES['file']); exit;
              /*for ($i=0; $i < count($_FILES['file']['tmp_name']) ; $i++) { 
                $mail->addAttachment($_FILES['file']['tmp_name'][$i], $_FILES['file']['name'][$i]);    // Optional name
              }*/
            /*  $mail->isHTML(true);                                  // Set email format to HTML

              $mail->Subject = 'Livraison de votre colis '; 
              //$mail->Body    = '<div style="border:2px solid blue;"> thanks for ordering &transaction id='.$tId.'</br> &quantite'.$objtrans->getQuantity().'<b></br> amount</b>'.$objtrans->getAmount().'</div>';

              $mail->Body ='date de depart est le:'$date_d'et la date arrive:'$date_a'' ;


              $mail->AltBody = 'Merci de reste a cote de votre mobile le jour de la livraison  ';

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
     }*/
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
        $host=mysqli_connect("localhost", "root", "")or die("cannot connect");
        mysqli_select_db($host,"sisagri2")or die("cannot select DB");
        $sql="select email from client where username='$cl'";
        $req=mysqli_query($host,$sql);
        $destinataire="borelaknti@gmail.com";
        $sujet='Livraison du produit '.$cd.' ';
        $message = '<html>';
        $message .= '<head><title>Livraison de commande</title></head>';
        $message .= '<body><p>votre commande sera livre du '.$date_d.' au '.$date_a.'</p></body>';
        $message .= '</html>';
        $headers ='MIME-Version: 1.0'."\r\n";
        $headers .='Content-type: text/html; charset=iso-8859-1'."\r\n";
        mail($destinataire,$sujet,$message,$headers);
        'Email envoyé!'
?>
