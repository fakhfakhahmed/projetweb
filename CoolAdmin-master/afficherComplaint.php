<?php
include 'inc/header.php';
include 'inc/ComplaintC.php';
$Cmplnt = new ComplaintC();
$listComplaint = $Cmplnt->afficherComplaint();
?>
<?<?php 
// Below is optional, remove if you have already connected to your database.
$mysqli = mysqli_connect('localhost', 'root', '', 'sisagri2');
// Get the total number of records from our table "students".
$total_pages = $mysqli->query('SELECT COUNT(*) FROM complaint')->fetch_row()[0];

// Check if the page number is specified and check if it's a number, if not return the default page number which is 1.
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;

// Number of results to show on each page.
$num_results_on_page = 5;
if ($stmt = $mysqli->prepare('SELECT * FROM complaint/* ORDER BY FullName*/ LIMIT ?,?')) {
	// Calculate the page to get the results we need from our table.
	$calc_page = ($page - 1) * $num_results_on_page;
	$stmt->bind_param('ii', $calc_page, $num_results_on_page);
	$stmt->execute(); 
	// Get the results...
	$result = $stmt->get_result();
	$stmt->close();
}
 ?>
<body>
   <link rel="stylesheet" type="text/css" href="css/afficherComplaint.css">
  <div style="margin-top: 80px;" class="header">Users</div>
<table  cellspacing="0">
    <tr>
        <th><a href="COrderByID.php"> ID_Complaint</a></th>
        <th><a href="COrderByFullName.php"> FullName</a></th>
        <th>Adress</th>
        <th>Email</th>
        <th>PhoneNumber</th>
        <th>Message</th>
        <th>Reply</th>
    </tr>

<?php

 while ($row = $result->fetch_assoc()): ?>
<?php

    echo '
        <tr>
            <td>'.$row["ID_Complaint"].'</td>
            <td>'.$row["FullName"].'</td>
            <td>'.$row["Adress"].'</td>
            <td>'.$row["Email"].'</td>
            <td>'.$row["PhoneNumber"].'</td>
            <td>'.$row["Message"].'</td>
            <td>
                <form action="https://outlook.com/Reply.php?" method="GET">
                    <input type="hidden" id="ID_Complaint" name="ID_Complaint" value="'.$row["ID_Complaint"].'">
                    <input type="hidden" id="FullName" name="FullName" value="'.$row["FullName"].'">
                    <input type="hidden" id="pre" name="pre" value="'.$row["Email"].'">
                    <input type="hidden" id="dat" name="dat" value="'.$row["Adress"].'">
                    <input type="hidden" id="nbc" name="nbc" value="'.$row["PhoneNumber"].'">
                    <input type="hidden" id="Message" name="Message" value="'.$row["Message"].'">
                    <input style="background: none; border: none; text-decoration: underline;" type="submit" value="Reply">
                </form>
            </td>
        </tr>
    ';



?>
<?php endwhile; ?>
</table>
<?php if (ceil($total_pages / $num_results_on_page) > 0): ?>
<ul class="pagination">
	<?php if ($page > 1): ?>
	<li class="prev"><a href="afficherComplaint.php?page=<?php echo $page-1 ?>">Prev</a></li>
	<?php endif; ?>

	<?php if ($page > 3): ?>
	<li class="start"><a href="afficherComplaint.php?page=1">1</a></li>
	<li class="dots">...</li>
	<?php endif; ?>

	<?php if ($page-2 > 0): ?><li class="page"><a href="afficherComplaint.php?page=<?php echo $page-2 ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
	<?php if ($page-1 > 0): ?><li class="page"><a href="afficherComplaint.php?page=<?php echo $page-1 ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

	<li class="currentpage"><a href="afficherComplaint.php?page=<?php echo $page ?>"><?php echo $page ?></a></li>

	<?php if ($page+1 < ceil($total_pages / $num_results_on_page)+1): ?><li class="page"><a href="afficherComplaint.php?page=<?php echo $page+1 ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
	<?php if ($page+2 < ceil($total_pages / $num_results_on_page)+1): ?><li class="page"><a href="afficherComplaint.php?page=<?php echo $page+2 ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

	<?php if ($page < ceil($total_pages / $num_results_on_page)-2): ?>
	<li class="dots">...</li>
	<li class="end"><a href="afficherComplaint.php?page=<?php echo ceil($total_pages / $num_results_on_page) ?>"><?php echo ceil($total_pages / $num_results_on_page) ?></a></li>
	<?php endif; ?>

	<?php if ($page < ceil($total_pages / $num_results_on_page)): ?>
	<li class="next"><a href="afficherComplaint.php?page=<?php echo $page+1 ?>">Next</a></li>
	<?php endif; ?>
</ul>
<?php endif; ?>
   <div>	
   	<a style="margin: 10px 50px;" href="CPrint.php">Print</a></div>
   	<div>
	<a style="margin: 10px 50px;" href="CsearchF.php">Search</a>
	</div>
<style type="text/css">
	.pagination {
	list-style-type: none;
	padding: 10px 0;
	display: inline-flex;
	justify-content: space-between;
	box-sizing: border-box;
}
.pagination li {
	box-sizing: border-box;
	padding-right: 10px;
}
.pagination li a {
	box-sizing: border-box;
	background-color: #e2e6e6;
	padding: 8px;
	text-decoration: none;
	font-size: 12px;
	font-weight: bold;
	color: #616872;
	border-radius: 4px;
}
.pagination li a:hover {
	background-color: #d4dada;
}
.pagination .next a, .pagination .prev a {
	text-transform: uppercase;
	font-size: 12px;
}
.pagination .currentpage a {
	background-color: #518acb;
	color: #fff;
}
.pagination .currentpage a:hover {
	background-color: #518acb;
}
</style>
<?php
include 'inc/end.php';
?>
