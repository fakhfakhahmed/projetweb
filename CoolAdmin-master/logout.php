<?php
 session_start();
unset($_SESSION['mail']);
unset($_SESSION['pass']);
unset($_SESSION['username']);
unset($_SESSION['nom']);
unset($_SESSION['prenom']);
unset($_SESSION['tel']);
unset($_SESSION['type']);
 header('Location:login.php');
 ?>
