<?php



	$host=mysqli_connect("localhost", "root", "")or die("cannot connect");
		mysqli_select_db($host,"sisagri2")or die("cannot select DB");



		$sql="SELECT dateinscri , COUNT('dateinscri') FROM client group by dateinscri ";

		$req=mysqli_query($host,$sql);




 ?>



<div >
    <div class=" table100 ver2 ">
        <table id="example" class="table table-borderless table-striped table-earning"  style="margin-left: 70px;">
            <thead>
              <tr>
                <th>date</th>
                <th>accounts created</th>


              </tr>
            </thead>
            <tbody>
              <?php
                  while($row=mysqli_fetch_array($req,MYSQLI_NUM))
                    {
              				echo'
                      <tr>
                        <td>'. $row[0].'</td>
                        <td>'. $row[1].'</td>




                      </tr>';
                    }

                    ?>
              </table>

            </tbody>
        </table>
    </div>
</div>
