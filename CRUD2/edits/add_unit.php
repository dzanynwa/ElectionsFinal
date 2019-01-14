<?php 

session_start();

if(!isset($_SESSION["username"])){
    header("location: login.php");
    exit;
}

include('../include/connection.inc.php');



$error_msg = $success_msg =  "";


if(isset($_POST['add']))
{
    $unitid = $_POST['unitid'];
    $unitname = $_POST['unitname'];
    $parentid = $_POST['parentid'];
    $voters = $_POST['voters'];
    $mjesta = $_POST['mjesta'];
    $obradjeno = $_POST['obradjeno'];

    

    if( !empty($unitid) && !empty($unitname) && !empty($parentid) && !empty($voters) && !empty($mjesta) )
    {
        $success_msg  = " Unit added";


            $sql =" INSERT INTO electionunit
            Values ('$unitid', '$unitname', '$parentid', '$voters', '$mjesta', '$obradjeno')";
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
		<h2>Add Unit</h2>
		<hr>
        <form action="" method="POST">
        	<p class="add-success"> <?php echo $success_msg; ?></p>
        	<p class="post-error"> <?php echo $error_msg ?> </p>
            <div class="form-group">
                <label class="label-post">Unit ID</label><input type="text" name="unitid" />
            </div>
            <div class="form-group">
                <label class="label-post">Unit Name</label><input type="text" name="unitname" />
            </div>
            <div class="form-group">
            <div class="form-group">
                <label class="label-post">Parent ID</label><input type="text" name="parentid" />
            </div>
                <label class="label-post">Number of Voters</label><input type="text" name="voters" />
            </div>
            <div class="form-group">
                <label class="label-post">Broj Mjesta</label><input type="text" name="mjesta" />
            </div>
            <div class="form-group">
                <label class="label-post">Obradjeno</label><input type="text" name="obradjeno" />
            </div>
           
            
                <input type="submit" name="add" class="login-button add-post" value="Insert">
            </div>
            <p>Back to <a href="electrorals.php" >Dashboard</a></p>
        </form>
    </div>
</body>
</html>