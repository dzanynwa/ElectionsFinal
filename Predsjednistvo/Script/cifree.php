<?php 
include('../../DB/db.php');
?>


<?php 



    $prvi = mysqli_query($mysqli, "SELECT SUM(NumOfVoters) as total1 FROM ElectionUnit e WHERE (e.Parent_ID < 6 AND e.Parent_ID > 0) OR (e.Parent_ID < 211 AND e.Parent_ID > 200) OR (e.Parent_ID < 413 AND e.Parent_ID > 400) OR (e.Parent_ID < 211 AND e.Parent_ID > 200)");
    $row = mysqli_fetch_assoc($prvi);
    $drugi = mysqli_query($mysqli, "SELECT COUNT(DISTINCT(Unit_Name)) as total2 FROM ElectionUnit e WHERE (e.Parent_ID < 6 AND e.Parent_ID > 0) OR (e.Parent_ID < 211 AND e.Parent_ID > 200) OR (e.Parent_ID < 413 AND e.Parent_ID > 400) OR (e.Parent_ID < 211 AND e.Parent_ID > 200)"); 
    $row2 = mysqli_fetch_assoc($drugi);
    $treci = mysqli_query($mysqli, "SELECT COUNT(DISTINCT(Candidate)) as total3 FROM Candidate c, Votes v WHERE (c.C_Nationality = 'Bošnjak' OR c.C_Nationality = 'Hrvat') AND v.Position = 1 AND c.Candidate_ID = v.Candidate");
    $row3 = mysqli_fetch_assoc($treci);







?>
                 <div class="card" id = "prva">
                <h2>Broj <br> birača:</h2>
                <h1><?php echo $row['total1'] ?></h1>
            </div>        
            <div class = "card">
                <h2>Broj biračkih mjesta:</h2>
                <h1><?php echo $row2['total2']?></h1>
            </div> 
            <div class = "card">
                <h2>Broj subjekata:</h2>
                <h1><?php echo $row3['total3']?></h1>
            </div> 
           