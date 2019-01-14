<?php 
session_start();


if(!isset($_SESSION["username"]) ){
    header("location: ../login.php");
    exit;
}


include('../include/connection.inc.php');


$id = $_GET['id'];
$sql = "SELECT * FROM electionunit WHERE UNIT_ID = '$id' " ;
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);


?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>View post</title>
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body>
	<nav>
		<div class="logout">
			<a href="../logout.php">Logout</a>
		</div>
	</nav>
	
	<div class="container">
	 <h3> <b>UNIT ID:</b> <?php  echo $row['Unit_ID'];  ?>  </h3>
	 <h3> <b>UNIT NAME:</b> <?php  echo $row['Unit_Name'];  ?>  </h3>
	 <h3> <b>PARENT ID</b> <?php  echo $row['Parent_ID'];  ?>  </h3>
	 <h3> <b>NUM OF VOTERS</b> <?php  echo $row['NumOfVoters'];  ?>  </h3>
	 <h3> <b>BROJ MJESTA</b> <?php  echo $row['BrojMjesta'];  ?>  </h3>
	 <h3> <b>OBRADJENO</b> <?php  echo $row['Obradjeno'];  ?>  </h3>
	
		
		<p>Back to <a href="electrorals.php">Dashboard</a></p>
	</div>
</body>
</html>