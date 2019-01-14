<?php 
include('../../DB/db.php');
?>


<?php 


        $id = $_GET['id'];
    $query = mysqli_query($mysqli,"SELECT Unit_Name, Unit_ID FROM ElectionUnit e WHERE e.Parent_ID = '$id'");
    echo "<option selected> </option> ";
    
    while ($row = mysqli_fetch_assoc($query))
    {


        echo "<option>".$row['Unit_Name']."</option>";
    }
?>