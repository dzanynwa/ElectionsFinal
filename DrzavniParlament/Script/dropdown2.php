<?php 
include('../../DB/db.php');
?>


<?php 



    $query = mysqli_query($mysqli,"SELECT Unit_Name, Unit_ID
    FROM ElectionUnit e 
    WHERE e.Unit_ID >0 AND e.Unit_ID <9");
    echo "<option selected></option> ";
    
    while ($row = mysqli_fetch_assoc($query))
    {


        echo "<option id=".$row['Unit_ID'].">".$row['Unit_Name']."</option>";
    }
?>