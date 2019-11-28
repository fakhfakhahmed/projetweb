<?php

session_start();
if(isset($_SESSION['email']))
 {include'headerc.php';}
 else{include'header.php';

 }
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

				<div class="row">
					<div class="col-12">
						<input type="email" class="form-control" name="email" placeholder="<?php echo $_SESSION['email']; ?> " disabled>
					</div>


					<div class="col-12">
						<input type="password" class="form-control" name="pass" placeholder="Your new password" required>
					</div>
					<div class="col-12">
						<input type="password" class="form-control" name="confirmpass" placeholder="Confirm your new password" required>
					</div>

					<div class="col-12">
						<button type="submit" class="btn famie-btn">change password</button>
					</div>
				</div>

		</div>
	</div>
</div>

</form>
</section>
<?php include 'footer.php'; ?>
