<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', 'root', 'Izbori');

	// initialize variables
	$A_name = "";
    $author = "";
    $content = "";
	$A_ID = 0;
    $update = false;
    $imagename = "";
    $imagetmp = "";

	if (isset($_POST['save'])) {
		$A_name = $_POST['A_name'];
        $author = $_POST['author'];
        $content = $_POST['content'];
        $imagename = $_FILES['Image']["name"];
        $imagetmp=addslashes (file_get_contents($_FILES['Image']['tmp_name']));

		mysqli_query($db, "INSERT INTO Article (A_name, Author, Content, Image, imagename) VALUES ('$A_name', '$author', '$content', '$imagetmp', '$imagename')"); 
		$_SESSION['message'] = "Article saved"; 
		header('location: index.php');
    }
    if (isset($_POST['save2'])) {
        $name = $db->real_escape_string($_FILES['file']['name']);
        $data = $db->real_escape_string(file_get_contents($_FILES ['file']['tmp_name']));
        $mime = $db->real_escape_string($_FILES['file']['type']);
        $size = intval($_FILES['file']['size']);

		mysqli_query($db, "INSERT INTO files (name, mime, size, data) VALUES ( '$name', '$mime', '$size', '$data')"); 
		$_SESSION['message'] = "File saved"; 
		header('location: index.php');
    }
    if (isset($_POST['update'])) {
        $A_ID = $_POST['A_ID'];
        $A_name = $_POST['A_name'];
        $author = $_POST['author'];
        $content = $_POST['content'];
        $imagename = $_FILES['Image']["name"];
        $imagetmp=addslashes (file_get_contents($_FILES['Image']['tmp_name']));
    
        mysqli_query($db, "UPDATE Article SET A_name='$A_name', Author='$author', Content='$content', Image='$imagetmp', imagename='$imagename' WHERE A_ID=$A_ID");
        $_SESSION['message'] = "Article updated!"; 
        header('location: index.php');
    }
    if (isset($_GET['del'])) {
        $A_ID = $_GET['del'];
        mysqli_query($db, "DELETE FROM Article WHERE A_ID=$A_ID");
        $_SESSION['message'] = "Article deleted!"; 
        header('location: index.php');
    }