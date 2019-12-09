<?php include 'header.php'; ?>
<section>

	<form method="post"  name="f" action="inc/views/ajouterclient.php" >
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
					<div class="col-lg-6">
						<input type="text" class="form-control" name="name" placeholder="Your Name" required >
					</div>
					<div class="col-lg-6">
						<input type="text" class="form-control" name="lastname" placeholder="Your lastname" required>
					</div>
					<div class="col-12">
						<input type="text" class="form-control" name="user" placeholder="Your username" required>
					</div>
					<div class="col-12">
						<input type="text" class="form-control" name="phone" placeholder="Your phone number" required>
					</div>
						<span id="tel"></span>
					<div class="col-12">
						<input type="password" class="form-control" name="pass" placeholder="Your password" required>
					</div>


					 <div class="col-12">
						 <input type="password" class="form-control" name="confirmpass" placeholder="Confirm your password" required>

					</div>
					<span id="mdp"></span>

					<div class="col-12">
						<button type="submit" class="btn famie-btn">Sign up</button>
					</div>
				</div>

		</div>
	</div>
</div>

</form>
</section>
<?php include 'footer.php'; ?>
