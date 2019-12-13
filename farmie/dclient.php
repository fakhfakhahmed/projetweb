<?php

session_start();
if(isset($_SESSION['email']))
 {include'headerc.php';}
 else{include'header.php';

 }
 $host=mysqli_connect("localhost", "root", "")or die("cannot connect");
  mysqli_select_db($host,"sisagri2")or die("cannot select DB");
  $email=$_SESSION['email'];
 $sql="select * from fidelite where username='$email'";
 $req=mysqli_query($host,$sql);
 $row=mysqli_fetch_array($req,MYSQLI_NUM);
 ?>

<section>
	<form method="post" action="inc/views/modifierclient.php">

<div class="col-12 col-lg-5">

	<div class="contact-content mb-100">
		<!-- Section Heading -->
		<div class="section-heading">
			<p></p>
			<h2><span></span> </h2>

		</div>
		<!-- Contact Form Area -->
		<div class="contact-form-area">

				<div class="col-12">

            <?php echo 'cher(e)'.$_SESSION['name'].' '.$_SESSION['lastname']; ?>

					</div>


					<div class="col-12">

             <?php echo ' tu as un remise de :'.' '.$row['1'].'TND';?>

					</div>
				</div>

		</div>
	</div>
</div>

</form>
</section>
<?php include 'footer.php'; ?>
