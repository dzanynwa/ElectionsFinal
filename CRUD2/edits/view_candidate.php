<?php 
session_start();


if(!isset($_SESSION["username"]) ){
    header("location: ../login.php");
    exit;
}


include('../include/connection.inc.php');


$id = $_GET['id'];
$sql = "SELECT * FROM candidate WHERE Candidate_ID = '$id' " ;
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);


?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> View Candidate </title>
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body>
	<nav>
		<div class="logout">
			<a href="../logout.php">Logout</a>
		</div>
	</nav>
	
	<div class="container">
	 <h3> <b>CANDIDATE ID:</b> <?php  echo $row['Candidate_ID'];  ?>  </h3>
	 <h3> <b>CANDIDATE NAME:</b> <?php  echo $row['Candidate_Name'];  ?>  </h3>
	 <h3> <b>CANDIDATE LAST NAME:</b> <?php  echo $row['Candidate_Lname'];  ?>  </h3>
	 <h3> <b>NATIONALITY:</b> <?php  echo $row['C_Nationality'];  ?>  </h3>

	
		
		<p>Back to <a href="candidates.php">Dashboard</a></p>
	</div>
</body>
</html>