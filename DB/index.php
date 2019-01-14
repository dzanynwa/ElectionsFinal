<?php  include('crud.php'); ?>
<?php 
	if (isset($_GET['edit'])) {
    $A_ID = $_GET['edit'];
    $A_name = $_GET['edit'];
    $Author = $_GET['edit'];
    $Content = $_GET['edit'];
    $Image = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM Article WHERE A_ID=$A_ID");

		if (@count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$A_name = $n['A_name'];
            $Author = $n['Author'];
            $Content = $n['Content'];
            $Image = $n['Image'];
		}
	}
?>
<!DOCTYPE html>
<html>
<body>
<?php $results = mysqli_query($db, "SELECT * FROM Article"); ?>
<table>
	<thead>
		<tr>
			<th>Title</th>
            <th>Author</th>
            <th>Content</th>
            <th>Image</th>
			<th colspan="4">Action</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
      <td><?php echo $row['A_name']; ?></td>
      <td><?php echo $row['Author']; ?></td>
      <td><?php echo $row['Content']; ?></td>
      <td><?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"/>';?></td>
			<td>
				<a href="index.php?edit=<?php echo $row['A_ID']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="crud.php?del=<?php echo $row['A_ID']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
	<?php } ?>
</table>
	<form method="post" action="crud.php" enctype="multipart/form-data">
		<div class="input-group">
    <input type="hidden" name="A_ID" value="<?php echo $A_ID; ?>">
      <label>Article title</label>
			<input type="text" name="A_name" value="<?php echo $A_name; ?>">
		</div>
		<div class="input-group">
			<label>Article author</label>
			<input type="text" name="author" value="<?php echo $Author; ?>">
    </div>
    <div class="input-group">
			<label>Article content</label>
			<input type="text" name="content" value="<?php echo $Content; ?>">
    </div>
    <div class="input-group">
			<label>Article image</label>
			<input type="file" name="Image">
    </div>
		<div class="input-group">
    <?php if ($update == true): ?>
	    <button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
    <?php else: ?>
	    <button class="btn" type="submit" name="save" >Save</button>
    <?php endif ?>
		</div>
    </form>
    <form method="post" action="crud.php" enctype="multipart/form-data">
    <div class="input-group">
			<label>Document</label>
            <input type="file" name="file">
            <button class="btn" type="submit" name="save2" >Save</button>
    </div>
    </form>
</body>
<body>
<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>
</html>

<style>
body {
    font-size: 19px;
}
table{
    width: 50%;
    margin: 30px auto;
    border-collapse: collapse;
    text-align: left;
}
tr {
    border-bottom: 1px solid #cbcbcb;
}
th, td{
    border: none;
    height: 30px;
    padding: 2px;
}
tr:hover {
    background: #F5F5F5;
}

form {
    width: 45%;
    margin: 50px auto;
    text-align: left;
    padding: 20px; 
    border: 1px solid #bbbbbb; 
    border-radius: 5px;
}

.input-group {
    margin: 10px 0px 10px 0px;
}
.input-group label {
    display: block;
    text-align: left;
    margin: 3px;
}
.input-group input {
    height: 30px;
    width: 93%;
    padding: 5px 10px;
    font-size: 16px;
    border-radius: 5px;
    border: 1px solid gray;
}
.btn {
    padding: 10px;
    font-size: 15px;
    color: white;
    background: #5F9EA0;
    border: none;
    border-radius: 5px;
}
.edit_btn {
    text-decoration: none;
    padding: 2px 5px;
    background: #2E8B57;
    color: white;
    border-radius: 3px;
}

.del_btn {
    text-decoration: none;
    padding: 2px 5px;
    color: white;
    border-radius: 3px;
    background: #800000;
}
.msg {
    margin: 30px auto; 
    padding: 10px; 
    border-radius: 5px; 
    color: #3c763d; 
    background: #dff0d8; 
    border: 1px solid #3c763d;
    width: 50%;
    text-align: center;
}
img {
    width: 200px;
    height: auto;
}
</style>