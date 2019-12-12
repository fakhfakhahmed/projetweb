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

div.container2{
  margin: 200px;


}
}</style>

<div id="bg"></div>
<div class="container2">
<script  src="https://www.paypal.com/sdk/js?client-id=sb"></script>
<script>paypal.Buttons().render('body');</script>

</div>
<?php include 'footer.php'; ?>
