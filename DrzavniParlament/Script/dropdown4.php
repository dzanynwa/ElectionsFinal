<?php 
include('../../DB/db.php');
?>


<?php 


        $id = $_GET['id'];
    $query = mysqli_query($mysqli,"SELECT Unit_Name, Unit_ID FROM ElectionUnit e WHERE e.Unit_Name = '$id'");
    echo "<option selected> </option> ";
    
    while ($row = mysqli_fetch_assoc($query))
    {


        echo "<option value=".$row['Unit_ID'].">".$row['Unit_Name']."</option>";
    }
?>