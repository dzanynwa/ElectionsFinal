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
	<title>Admin panel</title>
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
			<a class="addbutton" href="add_party.php">Add Party </a>		
		</div>
		<div class="right">
		
		</div>
<br>
<br>
				<?php 

				

					
					$sql = "SELECT * FROM Party"  ;
					$result = mysqli_query($conn,$sql);
				

				?> 

		<table>
			<tr>
				<th>Party ID</th>
				<th>Party Name</th>
				<th>Party Abbrevation</th>
				

				<th style="width: 178px;">Action</th>

				<?php while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td> <?php echo $row['Party_ID'] ; ?></td>
                            <td> <?php echo $row['Party_Name'] ;?> </td>                           
                            <td> <?php echo $row['Party_Abr'] ;?></td>

							<td><a class="editbutton" href=<?php  echo "edit_party.php?id=".$row['Party_ID']; ?>> Edit</a>
							<a class="viewbutton" href=<?php  echo "view_party.php?id=".$row['Party_ID'] ?> >View</a>
							<a class="deletebutton" href=<?php  echo "delete_party.php?id=".$row['Party_ID'] ?> >Delete</a>
							
							</td>
                        </tr>
                    <?php } ?>



			</tr>
			
		</table>
	</div>
</body>
</html>