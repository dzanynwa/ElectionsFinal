<?php 
include('../../DB/db.php');
?>


<?php 



    $query = mysqli_query($mysqli,"SELECT DISTINCT Unit_Name FROM ElectionUnit e WHERE (e.Parent_ID < 6 AND e.Parent_ID > 0) OR (e.Parent_ID > 200 AND e.Parent_ID < 211) OR (e.Parent_ID > 400 AND e.Parent_ID < 413) ORDER BY Unit_Name ASC ");
    echo "<option selected> </option> ";
    
    while ($row = mysqli_fetch_assoc($query))
    {


        echo "<option>".$row['Unit_Name']."</option>";
    }
?>