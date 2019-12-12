<?php include 'header.php'; ?>
<style type="text/css"> @import url(https://fonts.googleapis.com/css?family=Open+Sans+Condensed:700);

body {
  background: #999;
  padding: 40px;
  font-family: "Open Sans Condensed", sans-serif;
}

#bg {
  position: fixed;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background: url(http://phase11.net.w0137ba4.kasserver.com/wp-content/uploads/2015/02/service.jpg) no-repeat center center fixed;
  background-size: cover; 
}

form {
  position: relative;
  width: 300px;
  margin: 10px auto;
  background: rgba(130,130,130,.3);
  padding: 20px 22px;
  border: 1px solid;
  border-top-color: rgba(255,255,255,.4);
  border-left-color: rgba(255,255,255,.4);
  border-bottom-color: rgba(60,60,60,.4);
  border-right-color: rgba(60,60,60,.4);
}

form input, form button {
  width: 212px;
  border: 1px solid;
  border-bottom-color: rgba(255,255,255,.5);
  border-right-color: rgba(60,60,60,.35);
  border-top-color: rgba(60,60,60,.35);
  border-left-color: rgba(80,80,80,.45);
  background-color: rgba(0,0,0,.2);
  background-repeat: no-repeat;
  padding: 8px 24px 8px 10px;
  font: bold .875em/1.25em "Open Sans Condensed", sans-serif;
  letter-spacing: .075em;
  color: #fff;
  text-shadow: 0 1px 0 rgba(0,0,0,.1);
  margin-bottom: 19px;
}

form input:focus { background-color: rgba(0,0,0,.4); }



::-webkit-input-placeholder { color: #ccc; text-transform: uppercase; }
::-moz-placeholder { color: #ccc; text-transform: uppercase; }
:-ms-input-placeholder { color: #ccc; text-transform: uppercase; }

form button[type=submit] {
  width: 248px;
  margin-bottom: 0;
  color: white;
  letter-spacing: .05em;
  text-shadow: 0 1px 0 #133d3e;
  text-transform: uppercase;
  background: #225556;
  border-top-color: #9fb5b5;
  border-left-color: #608586;
  border-bottom-color: #1b4849;
  border-right-color: #1e4d4e;
  cursor: pointer;
  margin-top: 20px;
}
.radio1{
  width: 30px;
  margin: 0;
  position: relative;
}</style>

<div id="bg"></div>

<form action="SubmitRequest.php" method="POST">
    
  <label for="">Full Name:</label>
  <input type="text" name="FullName" placeholder="Enter Full Name" class="FullName" required>
  <label for="">Adress:</label>
  <input type="text" name="Adress" placeholder="Enter Your Home Adress" class="Adress" required>
  <label for="">Email:</label>
  <input type="text" name="Email" placeholder="Enter Email" class="Email" required>  
  <label for="">Phone Number:</label>
    <input type="text" name="PhoneNumber"  placeholder="Enter Phone Number" class="PhoneNumber" required>  
  <label for="">Name the product you're having trouble with:</label>
  <input type="text" name="ProductName" placeholder="Enter Product Name" class="ProductName" required>
  <label for=""><br>Purchase Date:</label>
  <input type="date" min="2019-11-25" max="2030-08-26" name="PurchaseDate" required>
  <p>Are you a Premium Member?:</p>
   
      <input type="radio" name="PremiumMember" class="radio1"  id="contactChoice1"
       name="Premium" value="yes">
      <label for="contactChoice1">Yes<br></label>

      <input type="radio" class="radio1" name="PremiumMember" id="contactChoice2"
       name="Premium" value="no">
      <label for="contactChoice2">No</label>
      <script  src="https://www.paypal.com/sdk/js?client-id=sb"></script>
      <script>paypal.Buttons().render('body');</script>
    
  <button type="submit" value="Submit">Ask for help! </button>
    

</form>

<?php include 'footer.php'; ?>
