<?php 
include('../../DB/db.php');
?>


<?php 



    $query = mysqli_query($mysqli,"SELECT DISTINCT Unit_Name FROM ElectionUnit e WHERE (e.Parent_ID > 5 AND e.Parent_ID < 9) OR (e.Parent_ID > 300 AND e.Parent_ID < 304) ORDER BY Unit_Name ASC");
        echo "<option selected> </option> ";
    while ($row = mysqli_fetch_assoc($query))
    {


        echo "<option>".$row['Unit_Name']."</option>";
    }
?>