<?php
 
session_start();
 
if(!isset($_SESSION['username'])){
    header('Location: login.php');
    exit('You must log in first!');
}
 
$error_message = $success_message = '';
 
include('../include/connection.inc.php');
 
$id = $_GET['id'];
$sql = "SELECT * FROM electionunit WHERE Unit_ID  = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
 
 
if(isset($_POST['update'])){
 
 
$id = $_GET['id'];
$name = mysqli_real_escape_string($conn, $_POST['name']);
$glasaci = mysqli_real_escape_string($conn, $_POST['glasaci']);
$mjesta = mysqli_real_escape_string($conn, $_POST['mjesta']);
$obradjeno = mysqli_real_escape_string($conn, $_POST['obradjeno']);
 
if(!empty($name) && !empty($glasaci) && !empty($mjesta) && !empty($obradjeno) ){
 
$sql = "UPDATE electionunit SET Unit_Name = '$name', NumOfVoters = '$glasaci', BrojMjesta= '$mjesta', Obradjeno = '$obradjeno' WHERE Unit_ID = '$id'";
 
$result = mysqli_query($conn, $sql);
 
 
$success_message = 'Post successfully updated.';
 
} else {
 
$error_message = 'All fields are
required!';
 
}
 
}
 
?>



<!DOCTYPE html>
<html>
<head>
	<title>PHP&amp;MySQL - Edit post</title>
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body>
	<nav>
		<div class="logout">
			<a href="../logout.php">Logout</a>
		</div>
	</nav>
	<div class="container">
		<h2>Edit post</h2>
		<hr>
        <form action="" method="POST">
        	<p class="add-success"> <?php echo $success_message ?></p>
        	<p class="post-error"> <?php echo $error_message ?> </p>
            <div class="form-group">
                <label class="label-post">Unit Name</label><input type="text" name="name" value=" <?php echo $row['Unit_Name'] ; ?> "/>
            </div>
            <div class="form-group">
                <label class="label-post">Broj Glasaca</label><input type="text" name="glasaci" value=" <?php echo $row['NumOfVoters'] ; ?> "/>
            </div>
            <div class="form-group">
                <label class="label-post">Broj Mjesta</label><input type="text" name="mjesta" value=" <?php echo $row['BrojMjesta'] ; ?> "/>
            </div>
            <div class="form-group">
                <label class="label-post">Obradjeno</label><input type="text" name="obradjeno" value=" <?php echo $row['Obradjeno'] ; ?> "/>
            </div>
            
           
            <div class="form-group>">
                <input type="submit" name="update" class="login-button add-post" value="Update post">
            </div>
            <p>Back to <a href="electrorals.php">Dashboard</a></p>
        </form>
    </div>
</body>
</html>