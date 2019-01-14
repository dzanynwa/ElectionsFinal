<?php 

session_start();


if(!isset($_SESSION["username"])) {
    header("location: login.php");
    exit;
}

include('include/connection.inc.php');



?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin panel </title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
	<nav>
		<div class="logout">
			<a href="logout.php">Logout</a>
		</div>
	</nav>
	<div class="container">
		<h3>Welcome </h3>
		
	
	<br>
	<br>

				

		<table>
			<tr>
				<th>Table Name</th>
				
				
				<th style="width: 178px;">Action</th>

				
                        <tr>
                          <td>Electroral Units</td>
							<td><a class="editbutton" href="edits/electrorals.php"> Edit</a>
							
							</td>
                        </tr>
						
                                       
                        <tr>
                          <td>Parties</td>
							<td><a class="editbutton" href="edits/parties.php"> Edit</a>
							
							</td>
                        </tr>
						
                        <tr>
                          <td>Candidates</td>
							<td><a class="editbutton" href="edits/candidates.php"> Edit</a>
						
							</td>
                        </tr>
						
                     
                   
                   
                   
                   



			</tr>
			
		</table>
	</div>
</body>
</html>