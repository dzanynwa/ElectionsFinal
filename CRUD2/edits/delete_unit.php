<?php 

session_start();
if(!isset($_SESSION["username"])){
    header("location: ../login.php");
    exit;
}

include('../include/connection.inc.php');


$id = $_GET['id'];
$sql = "DELETE FROM electionunit WHERE  Unit_ID = '$id'; ";

$rezultat = mysqli_query($conn,$sql);

header("Location: electrorals.php")



?>