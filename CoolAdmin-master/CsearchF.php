<?php
$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "sisagri2";
$con = new mysqli($localhost, $username, $password, $dbname);
if( $con->connect_error){
    die('Error: ' . $con->connect_error);
}
$sql = "SELECT * FROM complaint";
if( isset($_GET['search']) ){
    $name = mysqli_real_escape_string($con, htmlspecialchars($_GET['search']));
    $sql = "SELECT * FROM complaint WHERE FullName ='$name'";
}
$result = $con->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
<title>Search</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
<style type="">
    .button {
          background-color: #ddd;
          border: none;
          color: black;
          padding: 5px 10px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          margin: 4px 2px;
          cursor: pointer;
          border-radius: 16px;
                 }
        .btn{
            margin-left: 10px;
            margin-top:2px;
            }
        table {
          width: 100%;
        }
        table td, table th {
          color: #2b686e;
          padding: 10px;
        }
        table td {
          text-align: center;
          vertical-align: middle;
        }
        table td:last-child {
          font-size: 0.95em;
          line-height: 1.4;
          text-align: left;
        }
        table th {
          background-color: #daeff1;
          font-weight: 300;
        }
     

        @media screen and (max-width: 700px) {
          table, tr, td {
            display: block;
          }

          td:first-child {
            position: absolute;
            top: 50%;
            -webkit-transform: translateY(-50%);
                    transform: translateY(-50%);
            width: 100px;
          }
         
          tr {
            padding: 10px 0;
            position: relative;
          }
         
        }    
</style>
</head>
<body>
<div class="container">
<table>
<tr>
    <td><h3>Chercher par FullName :</h3></td>
    <td><a style="position: relative; top : 8px;" class="button btn" href="CsearchID.php">ID</a></td>
    <td><a style="position: relative; top : 8px;" class="button btn" href="CsearchF.php">FullName</a></td>
</tr>
</table>
<form action="" method="GET">
<input type="text" placeholder="Declarer l'objet desirer" name="search">&nbsp;
<input style="position: relative; bottom: 3px" type="submit" value="Chercher" name="btn" class="btn btn-sm btn-primary">
</form>
<h2>Liste des Utilisateurs :</h2>
<table class="table table-striped table-responsive">
<tr>
      <th>ID_Complaint</th>
      <th>FullName</th>
      <th>Adress</th>
      <th>Email</th>
      <th>PhoneNumber</th>
      <th>Message</th>
      <th>Reply</th>
</tr>
<?php
while($row = $result->fetch_assoc()){
    ?>
    <tr>
    <td><?php echo $row['ID_Complaint']; ?></td>
    <td><?php echo $row['FullName']; ?></td>
    <td><?php echo $row['Adress']; ?></td>
    <td><?php echo $row['Email']; ?></td>
    <td><?php echo $row['PhoneNumber']; ?></td>
    <td><?php echo $row['Message']; ?></td>
    <td><?php echo ' <a href="https://outlook.com/Reply.php?" style="background: none; border: none; text-decoration: underline;">Reply</a> ' ?></td>
    </tr>
    <?php
}
?>
</table>
</div>
</body>
</html>