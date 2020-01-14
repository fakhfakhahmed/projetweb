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
 $sql1="select * from client where email='$email'";
 $req1=mysqli_query($host,$sql1);
 $row1=mysqli_fetch_array($req1,MYSQLI_NUM);
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

          <?php echo 'username:'.$row1['0']; ?>

        </div>
				<div class="col-12">

            <?php echo 'nom:'.$row1['1'] ?>

					</div>
          <div class="col-12">

              <?php echo 'prenom:'.$row1['2'] ?>

            </div>
            <div class="col-12">

                <?php echo 'tel:'.$row1['5'] ?>

              </div>
          <div class="col-12">

              <?php echo 'email:'.$email; ?>

  					</div>


					<div class="col-12">

             <?php echo ' tu as une remise de :'.' '.$row['1'].'TND';?>

					</div>
				</div>

		</div>
	</div>
</div>

</form>
</section>
<?php include 'footer.php'; ?>
