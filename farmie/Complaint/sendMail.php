<?php /*
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "zekkuzufyu@enayu.com";
    $email_subject = "YAY";
 
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['FullName']) ||
        !isset($_POST['Adress']) ||
        !isset($_POST['Email']) ||
        !isset($_POST['PhoneNumber']) ||
        !isset($_POST['Message'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
     
 
    $FullName = $_POST['FullName']; // required
    $Adress = $_POST['Adress']; // required
    $email_from = $_POST['Email']; // required
    $PhoneNumber = $_POST['PhoneNumber']; // not required
    $Message = $_POST['Message']; // required
 
    
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "FullName: ".clean_string($FullName)."\n";
    $email_message .= "Adress: ".clean_string($Adress)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "PhoneNumber: ".clean_string($PhoneNumber)."\n";
    $email_message .= "Comments: ".clean_string($Message)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include your own success html here -->
 
Thank you for contacting us. We will be in touch with you very soon.
 
<?php
 
}
?>