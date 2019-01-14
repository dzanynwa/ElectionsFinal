<?php 

session_start();

if(!isset($_SESSION["username"])){
    header("location: ../login.php");
    exit;
}

include('../include/connection.inc.php');



$error_msg = $success_msg =  "";


if(isset($_POST['add']))
{
    $name= $_POST['name'];
    $lname = $_POST['lname'];
    $cid = $_POST['canid'];
    $nat_number = $_POST['nationality'];
     switch ($nat_number)
      {
          case 1: $nat= "Bošnjak";
          break;
          case 2: $nat = "Srbin";
          break;
          case 3: $nat  = "Hrvat";
          break;
      }

    
    

    if( !empty($name) && !empty($lname) && !empty($cid) && !empty($nat) )
    {
        $success_msg  = " Candidate added";


            $sql =" INSERT INTO candidate (Candidate_ID, C_Fname, C_Lname, C_Nationality)
            Values ('$cid', '$name', '$lname', '$nat')";
            $result = mysqli_query($conn,$sql);


    }
    else {

        $error_msg = " All fields are required.";
    }


}


?>



<!DOCTYPE html>
<html>
<head>
	<title>Add post</title>
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body>
	<nav>
		<div class="logout">
			<a href="../logout.php">Logout</a>
		</div>
	</nav>
	<div class="container">
		<h2>Add Candidate</h2>
		<hr>
        <form action="" method="POST">
        	<p class="add-success"> <?php echo $success_msg; ?></p>
        	<p class="post-error"> <?php echo $error_msg ?> </p>
            <div class="form-group">

            <label class="label-post">ID </label> <input type="text" name="canid" />

            </div>
            <div class="form-group">
                <label class="label-post">Candidate Name </label><input type="text" name="name" />
            </div>
            <div class="form-group">
                <label class="label-post">Candidate Last Name</label><input type="text" name="lname" />
              
              </div>

              <label class="label-post">Nationality</label><select name="nationality">
					<option value="1">Bošnjak</option>
					<option value="2">Srbin</option>
					<option value="3">Hrvat</option>
				</select>
         
      
           
            
                <input type="submit" name="add" class="login-button add-post" value="Insert">
            </div>
            <p>Back to <a href="candidates.php" >Dashboard</a></p>
        </form>
    </div>
</body>
</html>