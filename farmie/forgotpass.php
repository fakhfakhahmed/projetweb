<?php include 'header.php';
$x= random_int(100000,999999); ?>
<section>
	<form method="post" action="https://archimammou.educationhost.cloud/mail/mail.php?email=">
<div class="col-12 col-lg-5">
	<div class="contact-content mb-100">
		<!-- Section Heading -->
		<div class="section-heading">
			<p>Contact now</p>
			<h2><span>Get In Touch</span> With Us</h2>
			<img src="img/core-img/decor.png" alt="">
		</div>
		<!-- Contact Form Area -->
		<div class="contact-form-area">

				<div class="row">
					<div class="col-12">
						<input type="email" class="form-control" name="email" placeholder="Your email" required>

					</div>
          <input type="hidden" name="code" value="<?php echo $x?>;">



					<div class="col-12">

						<button type="submit" class="btn famie-btn-danger" href="signup.php">forgot password ?</button>
					</div>


				</div>

		</div>
	</div>
</div>
<?php
$host=mysqli_connect("localhost", "root", "")or die("cannot connect");
mysqli_select_db($host,"sisagri2")or die("cannot select DB");
$sql="INSERT INTO forgot (email,code) VALUES ('$email', '$x')";
$req= mysqli_query($host,$sql);
?>
</form>



</section>
<?php include 'footer.php'; ?>
