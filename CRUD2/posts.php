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
	<title>Admin panel</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
	<nav>
		<div class="logout">
			<a href="logout.php">Logout</a>
		</div>
	</nav>
	<div class="container">
		<h3>Welcome Super Admin </h3>
		<div class="left">
			<a class="addbutton" href="add_post.php">Add post</a>		
		</div>
		<div class="right">
			<form action="" method="get">
				<input type="submit" name="filter" class="addbutton" value="Filter" > 
				<select name="filter">
					<option value="1">News</option>
					<option value="2">Blog</option>
				</select>
			</form>
		</div>

				<?php 

				if (isset($_GET['filter']))
				{
					if ($_GET['filter'] == 1)
							{
					$sql = "SELECT * FROM posts where Category = 'News' " ;
					$result = mysqli_query($conn,$sql);


							}
					
					else {
						$sql = "SELECT * FROM posts where Category = 'Blog' " ;
						$result = mysqli_query($conn,$sql);
	
					}
				}
				else 
				{

					
					$sql = "SELECT * FROM posts"  ;
					$result = mysqli_query($conn,$sql);
				}

				?> 

		<table>
			<tr>
				<th>Name</th>
				<th>Category</th>
				<th>Date Created</th>
				<th style="width: 178px;">Action</th>

				<?php while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td> <?php echo $row['Title'] ; ?></td>
                            <td> <?php echo $row['Category'] ;?> </td>                           
                            <td> <?php echo $row['Date_Created'] ;?></td>
							<td><a class="editbutton" href=<?php  echo "edit_post.php?id=".$row['Id']; ?>> Edit</a>
							<a class="viewbutton" href=<?php  echo "view_post.php?id=".$row['Id'] ?> >View</a>
							<a class="deletebutton" href=<?php  echo "delete_post.php?id=".$row['Id'] ?> >Delete</a>
							
							</td>
                        </tr>
                    <?php } ?>



			</tr>
			
		</table>
	</div>
</body>
</html>