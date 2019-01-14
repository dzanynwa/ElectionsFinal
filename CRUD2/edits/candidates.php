<?php 

session_start();


if(!isset($_SESSION["username"])) {
    header("location: login.php");
    exit;
}

include('../include/connection.inc.php');



?>


<!DOCTYPE html>
<html>
<head>
	<title>  Admin panel</title>
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body>
	<nav>
		<div class="logout">
			<a href="../logout.php">Logout</a>
			<a href="../dashboard.php">dashboard</a>

		</div>
	</nav>
	<div class="container">
		
		<div class="left">
			<a class="addbutton" href="add_candidate.php">Add Candidate</a>		
		</div>
		
		<div class="right">
			<form action="" method="get">
				<input type="submit" name="filter" class="addbutton" value="Filter" > 
				<select name="filter">
					<option value="1">Bošnjak</option>
					<option value="2">Srbin</option>
					<option value="3">Hrvat</option>

				</select>
			</form>
		</div>
<br>
<br>
				

<?php 

if (isset($_GET['filter']))
{
    if ($_GET['filter'] == 1)
            {
    $sql = "SELECT * FROM candidate where C_Nationality = 'Bošnjak' " ;
    $result = mysqli_query($conn,$sql);


            }
    
    else if ($_GET['filter'] == 2){
         $sql = "SELECT * FROM candidate where C_Nationality = 'Srbin' " ;       
        $result = mysqli_query($conn,$sql);

    }
}
else if ($_GET['filter'] == 3)
{

    
    $sql = "SELECT * FROM candidate where C_Nationality = 'Hrvat' " ;          
    $result = mysqli_query($conn,$sql);
}
else {


					
					$sql = "SELECT * FROM candidate"  ;
					$result = mysqli_query($conn,$sql);
}

				?> 

		<table>
			<tr>
				<th> Name </th>
				<th>Last Name</th>
				<th>Nationality</th>

				
				

				<th style="width: 178px;">Action</th>

				<?php while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td> <?php echo $row['C_Fname'] ; ?></td>
                            <td> <?php echo $row['C_Lname'] ;?> </td>    
                            <td> <?php echo $row['C_Nationality'] ;?> </td>                           


							<td><a class="editbutton" href=<?php  echo "edit_candidate.php?id=".$row['Candidate_ID']; ?>> Edit</a>
							<a class="viewbutton" href=<?php  echo "view_candidate.php?id=".$row['Candidate_ID'] ?> >View</a>
							<a class="deletebutton" href=<?php  echo "delete_candidate.php?id=".$row['Candidate_ID'] ?> >Delete</a>
							
							</td>
                        </tr>
                    <?php } ?>



			</tr>
			
		</table>
	</div>
</body>
</html>