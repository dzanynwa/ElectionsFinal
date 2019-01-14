<?php 
session_start();


if(!isset($_SESSION["username"]) ){
    header("location: ../login.php");
    exit;
}


include('../include/connection.inc.php');


$id = $_GET['id'];
$sql = "SELECT * FROM party WHERE Party_ID = '$id' " ;
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);


?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> View party </title>
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body>
	<nav>
		<div class="logout">
			<a href="../logout.php">Logout</a>
		</div>
	</nav>
	
	<div class="container">
	 <h3> <b>PARTY ID:</b> <?php  echo $row['Party_ID'];  ?>  </h3>
	 <h3> <b>PARTY NAME:</b> <?php  echo $row['Party_Name'];  ?>  </h3>
	 <h3> <b> ABBREVIATION:</b> <?php  echo $row['Party_Abr'];  ?>  </h3>
	
		
		<p>Back to <a href="parties.php">Dashboard</a></p>
	</div>
</body>
</html>