<?php
 
session_start();
 
if(!isset($_SESSION['username'])){
    header('Location: ../login.php');
    exit('You must log in first!');
}
 
$error_message = $success_message = '';
 
include('../include/connection.inc.php');
 
$id = $_GET['id'];
$sql = "SELECT * FROM candidate WHERE Candidate_ID  = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
 
 
if(isset($_POST['update'])){
 
 
$id = $_GET['id'];
$cid = mysqli_real_escape_string($conn, $_POST['cid']);
$name = mysqli_real_escape_string($conn, $_POST['name']);
$lname = mysqli_real_escape_string($conn, $_POST['lname']);
$nat_number = mysqli_real_escape_string($conn, $_POST['nat']);
switch($category_number){
    case 1:
        $nat = 'Bošnjak';
        break;
    case 2:
        $nat = 'Srbin';
        break;
    case 3:
        $nat = 'Hrvat';
        break;
    default:
        echo $nat = 'Error!';
}


 
if(!empty($cid) && !empty($name) && !empty($lname) && !empty($nat) ){
 
$sql = "UPDATE candidate SET Candidate_Name = '$name', Candidate_Lname = '$lname', Candidate_ID = '$cid', C_Nationality = '$nat' WHERE Candidate_ID = '$id'";
 
$result = mysqli_query($conn, $sql);
 
 
$success_message = 'Candidate successfully updated.';
 
} else {
 
$error_message = 'All fields are
required!';
 
}
 
}
 
?>



<!DOCTYPE html>
<html>
<head>
	<title>Edit Candidate</title>
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body>
	<nav>
		<div class="logout">
			<a href="../logout.php">Logout</a>
		</div>
	</nav>
	<div class="container">
		<h2>Edit Candidate</h2>
		<hr>
        <form action="" method="POST">
        	<p class="add-success"> <?php echo $success_message ?></p>
        	<p class="post-error"> <?php echo $error_message ?> </p>

            <div class="form-group">
                <label class="label-post">Candidate ID</label><input type="text" name="cod" value=" <?php echo $row['Candidate_ID'] ; ?> "/>
            </div>
            <div class="form-group">
                <label class="label-post">Candidate Name</label><input type="text" name="name" value=" <?php echo $row['Candidate_Name'] ; ?> "/>
            </div>
            <div class="form-group">
                <label class="label-post">Candidate Last Name</label><input type="text" name="lname" value=" <?php echo $row['Candidate_Lname'] ; ?> "/>
            </div>
            <div class="form-group">
                <label class="label-post">Nationality</label><select name="nat">
					<option value=<?php if($row['C_Nationality'] == 'Bošnjak') echo "1 selected"; else echo "1"; ?> >Bošnjak</option>
					<option value= <?php if($row['C_Nationality'] == 'Srbin') echo "2 selected"; else echo "2"; ?> >Srbin</option>
					<option value= <?php if($row['C_Nationality'] == 'Hrvat') echo "3 selected"; else echo "3"; ?> >Hrvat</option>
				</select>
            </div>
            
            
           
            <div class="form-group>">
                <input type="submit" name="update" class="login-button add-post" value="Update post">
            </div>
            <p>Back to <a href="candidate.php">Dashboard</a></p>
        </form>
    </div>
</body>
</html>