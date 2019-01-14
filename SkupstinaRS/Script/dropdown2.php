<?php 
include('../../DB/db.php');
?>


<?php 



    $query = " SELECT Unit_Name, Unit_ID
    FROM ElectionUnit e 
    WHERE e.Unit_ID = 303";
    
    while ($row = mysqli_fetch_assoc($query))
    {


        echo "<option>".$row['Unit_Name']."</option>";
    }
?>