
<?php
include 'inc/header.php';





	$host=mysqli_connect("localhost", "root", "")or die("cannot connect");
		mysqli_select_db($host,"sisagri2")or die("cannot select DB");



		$sql="select * from admin  ";

		$req=mysqli_query($host,$sql);
 ?>

<section class="au-breadcrumb m-t-75">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="au-breadcrumb-content">
                        <div class="au-breadcrumb-left">
                            <span class="au-breadcrumb-span">You are here:</span>
                            <ul class="list-unstyled list-inline au-breadcrumb__list">
                                <li class="list-inline-item active">
                                    <a href="#">Admins</a>
                                </li>


                            </ul>
                        </div>
												<?php if ($_SESSION['type']=='sadmin')
												echo'
                        <form method="post" action="ajouteradmin.php">
                        <button  type="submit" class="au-btn au-btn-icon au-btn--green">
                            <i class="zmdi zmdi-plus"></i>Ajouter Admin </button>
                        </form>'?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="col-lg-">
    <div class="table-responsive table100 ver2 ">
        <table id="example" class="table table-borderless table-striped table-earning"  style="margin-left: 70px;">
            <thead>
              <tr>
                <th>username</th>
                <th>nom</th>
            		<th>prénom</th>
            		<th>email</th>
            		<th>numéro telephone</th>
								
							<?php	if ($_SESSION['type']=='sadmin')
								{echo'<th>supprimer</th>
								<th>bloquer/debloquer</th>
								';}
							?>
              </tr>
            </thead>
            <tbody>
              <?php
                  while($row=mysqli_fetch_array($req,MYSQLI_NUM))
                    {       if($row[7]==0){$faza="bloquer";}else{$faza='debloquer';}
              				echo'
                      <tr>
                        <td>'. $row[0].'</td>
                        <td>'. $row[1].'</td>
                        <td>'. $row[2].'</td>
                        <td>'. $row[4].'</td>
                        <td>'. $row[5].'</td>


 '; if ($_SESSION['type']=='sadmin'){echo'
	 <td> <form action="inc/views/supprimeradmin.php" method="get">
	 					<input type="hidden" id="username" name="username" value="'.$row["0"].'">
	 					<input class="au-btn au-btn-icon au-btn--green" type="submit" value="supprimer">
	 			</form></td>
	 	<td> <form action="inc/views/bloqueradmin.php" method="get">


						 <input type="hidden" id="email" name="email" value="'.$row["4"].'">

						 <input type="hidden" id="etat" name="etat" value="'.$row["7"].'">

						 <input class="au-btn au-btn-icon au-btn--green" type="submit" value='.$faza.'>
				 </form></td>
				 ';}echo'



                      </tr>';
                    }

                    ?>
              </table>

            </tbody>
        </table>
    </div>
</div>




<?php
include 'inc/end.php';

?>
