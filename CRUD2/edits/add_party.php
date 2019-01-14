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
    $abr = $_POST['abr'];
    $partyid = $_POST['partyid'];

    
    

    if( !empty($name) && !empty($abr) && !empty($partyid) )
    {
        $success_msg  = " Party added";


            $sql =" INSERT INTO party (Party_ID, Party_Name, Party_Abr)
            Values ('$partyid', '$name', '$abr')";
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
	<title> Add post</title>
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body>
	<nav>
		<div class="logout">
			<a href="../logout.php">Logout</a>
		</div>
	</nav>
	<div class="container">
		<h2>Add Unit</h2>
		<hr>
        <form action="" method="POST">
        	<p class="add-success"> <?php echo $success_msg; ?></p>
        	<p class="post-error"> <?php echo $error_msg ?> </p>
            <div class="form-group">
                <label class="label-post">Party Name </label><input type="text" name="name" />
            </div>
            <div class="form-group">
                <label class="label-post">Party Abbreviation </label><input type="text" name="abr" />
              
              </div>
            <div class="form-group">

                <label class="label-post">ID</label><input type="text" name="partyid" />

                </div>
      
           
            
                <input type="submit" name="add" class="login-button add-post" value="Insert">
            </div>
            <p>Back to <a href="parties.php" >Dashboard</a></p>
        </form>
    </div>
</body>
</html>