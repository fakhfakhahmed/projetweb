<?php
// including database connection
require 'config2.php';
?>

<html>
<head><title>Print Complaints</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">

</head>
<body body onload="window.print()">
	<center>
<?php
                $sqli = mysqli_query($link,"SELECT * FROM complaint ORDER BY ID_Complaint");
                           echo "<table border='1' width='75%' class='table table-bordered table-striped'>";
                            echo "<thead>";
                            echo "<tr>";
                            echo "<th>ID_Complaint</th>";
                            echo "<th>FullName</th>";
                            echo "<th>Adress</th>";
                            echo "<th>Email</th>";
                            echo "<th>PhoneNumber</th>";
                            echo "<th>Message</th>";
                            echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";
                            while($row = mysqli_fetch_array($sqli)){
                            echo "<tr>";
                            echo "<td>" . $row['ID_Complaint'] . "</td>";
                            echo "<td>" . $row['FullName'] . "</td>";
                            echo "<td>" . $row['Adress'] . "</td>";
                            echo "<td>" . $row['Email'] . "</td>";
                            echo "<td>" . $row['PhoneNumber'] . "</td>";
                            echo "<td>" . $row['Message'] . "</td>";
                            echo "</tr>";
                            }
                            echo "</tbody>";
                            echo "</table>";
?>
</center>
</body>
</html>
