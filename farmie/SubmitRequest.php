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
   	$dbname = "sisagri2";
   	//create connection
    $conn = new mysqli('localhost', 'root', '', 'sisagri2');
    if ($conn->connect_error) {
      die('Connection Failed : '.$conn->connect_error);
    }
    else{
     	$stmt = $conn->prepare("insert into helprequest(FullName, Adress, Email, PhoneNumber, ProductName, PurchaseDate, PremiumMember) values(?, ?, ?, ?, ?, ?, ?)");
     	$stmt->bind_param("sssisss", $FullName, $Adress, $Email, $PhoneNumber, $ProductName, $PurchaseDate, $PremiumMember);
     	$stmt->execute();
	    ///////////////////////////////
      require_once(__DIR__ . '/php-rest-api-master/autoload.php');

      $MessageBird = new \MessageBird\Client('xd0oL9SHbMcioJr3SXsdDjFGf'); // Set your own API access key here.

      $Message             = new \MessageBird\Objects\Message();
      $Message->originator = 'Sisagri';
      //echo $_SESSION['tel'];
      //$num='+'.strval( $_post['tel'] );
      //echo '/'.$num;

      $Message->recipients = array(+21697469458);
      $Message->body       = ' Thank you dear client, a technician will contact you as fast as we can ';

      try {
          $MessageResult = $MessageBird->messages->create($Message);
          //var_dump($MessageResult);
          

      } catch (\MessageBird\Exceptions\AuthenticateException $e) {
          // That means that your accessKey is unknown
          echo 'wrong login';

      } catch (\MessageBird\Exceptions\BalanceException $e) {
          // That means that you are out of credits, so do something about it.
          echo 'no balance';

      } catch (\Exception $e) {
          echo $e->getMessage();
      }
      /////////////////////////////
      header("Location: HelpRequest.php?HelpOnTheWay");
     	$stmt->close();
     	$conn->close();
     }
   ?>
