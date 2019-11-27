<php
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->



	<div class="container-contact100">
		<div class="contact100-map" style="background-image: url(images/background.jpg);"></div>

		<div class="wrap-contact100">
			<div class="contact100-form-title" style="background-image: url(images/complaint.jpg);">
				<span class="contact100-form-title-1">
					Fill Your Complaint Form
				</span>

				<span class="contact100-form-title-2">
					Feel free to drop us a line below!
				</span>
			</div>

			<form class="contact100-form validate-form" action="submitComplaint.php" method="POST">
				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Full Name:</span>
					<input class="input100" type="text" name="FullName" placeholder="Enter Full Name">
					<span class="focus-input100"></span>
				</div>
        <div class="wrap-input100 validate-input" data-validate="Adress is required">
          <span class="label-input100">Adsress:</span>
          <input class="input100" type="text" name="Adress" placeholder="Enter Home Adress">
          <span class="focus-input100"></span>
        </div>
				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">Email:</span>
					<input class="input100" type="text" name="Email" placeholder="Enter Email Addess">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Phone is required">
					<span class="label-input100">Phone Number:</span>
					<input class="input100" type="text" name="PhoneNumber" placeholder="Enter Phone Number">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<span class="label-input100">Message:</span>
					<textarea class="input100" name="Message" placeholder="Your Complaint..."></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" type="Submit" value="Submit">
						<span>
							Submit
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>
	<div id="dropDownSelect1"></div>
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
?>