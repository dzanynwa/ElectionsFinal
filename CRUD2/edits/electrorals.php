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
	<title> Admin panel </title>
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
			<a class="addbutton" href="add_unit.php">Add Unit </a>		
		</div>
		<div class="right">
		
		</div>
<br>
<br>
				<?php 

				

					
					$sql = "SELECT * FROM electionunit"  ;
					$result = mysqli_query($conn,$sql);
				

				?> 

		<table>
			<tr>
				<th>Unit ID</th>
				<th>Unit Name</th>
				<th>Number of Voters</th>
				<th>Broj Mjesta</th>
				<th>Obradjeno</th>


				<th style="width: 178px;">Action</th>

				<?php while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td> <?php echo $row['Unit_ID'] ; ?></td>
                            <td> <?php echo $row['Unit_Name'] ;?> </td>                           
                            <td> <?php echo $row['NumOfVoters'] ;?></td>
                            <td> <?php echo $row['BrojMjesta'] ;?></td>
                            <td> <?php echo $row['Obradjeno'] ;?></td>

							<td><a class="editbutton" href=<?php  echo "edit_unit.php?id=".$row['Unit_ID']; ?>> Edit</a>
							<a class="viewbutton" href=<?php  echo "view_unit.php?id=".$row['Unit_ID'] ?> >View</a>
							<a class="deletebutton" href=<?php  echo "delete_unit.php?id=".$row['Unit_ID'] ?> >Delete</a>
							
							</td>
                        </tr>
                    <?php } ?>



			</tr>
			
		</table>
	</div>
</body>
</html>