<?php 
session_start();


if(!isset($_SESSION["username"]) ){
    header("location: login.php");
    exit;
}


include('include/connection.inc.php');


$id = $_GET['id'];
$sql = "SELECT * FROM posts WHERE Id = '$id' " ;
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);


?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>View post</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
	<nav>
		<div class="logout">
			<a href="logout.php">Logout</a>
		</div>
	</nav>
	
	<div class="container">
	 <h1> <?php  echo $row['Title'];  ?>  </h1>
	 <img src=<?php echo $row['Image']; ?> alt="nema slike">
	 <p> <b>Published: </b> <?php echo $row['Date_Created'] ?>	</p>
	 <p> <?php echo $row['Content']; ?></p>
		
		<p>Back to <a href="dashboard.php">Dashboard</a></p>
	</div>
</body>
</html>