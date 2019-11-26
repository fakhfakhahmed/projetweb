
<?php
	$host=mysqli_connect("localhost", "root", "")or die("cannot connect");
		mysqli_select_db($host,"sisagri2")or die("cannot select DB");



		$sql="select * from client  ";

		$req=mysqli_query($host,$sql);

    ?>

    <table border="1" style="border-color:red;">
  <tr>
    <th>username</th>
    <th>nom</th>
		<th>prénom</th>
		<th>email</th>
		<th>numéro telephone</th>
		<th>etat</th>
  </tr>
<?php
    while($row=mysqli_fetch_array($req,MYSQLI_NUM))
      {if($row[6]==0){$faza="bloquer";}else{$faza='debloquer';}
				echo'
        <tr>
          <td>'. $row[0].'</td>
          <td>'. $row[1].'</td>
          <td>'. $row[2].'</td>

          <td>'. $row[4].'</td>
          <td>'. $row[5].'</td>
          <td>'. $row[6].'</td>
                <td> <form action="supprimerclient.php" method="get">
                          <input type="hidden" id="username" name="username" value="'.$row["0"].'">
                          <input style="background: none; border: none; color: blue; text-decoration: none;" type="submit" value="supprimer">
                      </form></td>

											<td> <form action="bloquerclient.php" method="get">

			                          <input type="hidden" id="email" name="email" value="'.$row["4"].'">

																<input type="hidden" id="etat" name="etat" value="'.$row["6"].'">

			                          <input style="background: none; border: none; color: blue; text-decoration: none;" type="submit" value='.$faza.'>
			                      </form></td>

        </tr>';
      }

      ?>
</table>
