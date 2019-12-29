<?php 
include 'inc/client.php';
session_start();
if(isset($_SESSION['email']))
{
	$v=$_SESSION['email'];
	//echo $v;
	include 'headerc.php'; 
	$consul=new client(NULL,NULL,NULL,NULL,$v,NULL);
	$prod=new fonctionC();
	$listorod=$prod->afficher_livraison($consul);
	$e=10;
	echo'
<section>
	<form method="post" action="#">
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
			<form action="#" method="post">
				<div class="welcome-content">
                	<h2>Tableau recapitulatif des livraisons</h2>
              	</div>
				<div class="row">
                    <table class="table table-borderless table-striped table-earning"  style="margin-left: 70px;">
					';
					echo'
                        <tr>
                            <td> Date depart </td>
                            <td> Date arrive </td>
							<td> Identifiant de la commande </td>
							<td> Prix </td>
						<tr>';
					foreach ($listorod as $row) {
					echo ' 
						<tr>
                			<td> ' . $row["date_depart"] . '</td>
               				<td> ' . $row["date_arrive"] . '</td>	
                			<td> ' . $row["orderld"] . '</td>
							<td> '.$e.' TND</td>
						</tr>';
						};
					echo'
                    </table>
				</div>
			</form>
		</div>
	</div>
</div>
</form>
</section>';
include 'footer.php'; 
}
else
{
	include 'header.php';
	include 'afficherconsultation2.php';
}

?>