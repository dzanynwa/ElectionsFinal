<?php 
include('../../DB/db.php');
?>


<?php 


               $id = $_GET['id'];

                $prvi = mysqli_query($mysqli, " SELECT SUM(NumOfVoters) as total1 FROM ElectionUnit e WHERE e.Parent_ID = '$id'");
                $row = mysqli_fetch_assoc($prvi);
                $drugi = mysqli_query($mysqli, "SELECT COUNT(DISTINCT(Unit_ID)) as total2 FROM ElectionUnit e WHERE (e.Parent_ID < 9 AND e.Parent_ID > 0)"); 
                $row2 = mysqli_fetch_assoc($drugi);
                $treci = mysqli_query($mysqli, "SELECT COUNT(DISTINCT(Candidate)) as total3 FROM Candidate c, Votes v WHERE v.Position = 2 AND c.Candidate_ID = v.Candidate");
                $row3 = mysqli_fetch_assoc($treci);

        


?>
                 <div class="card" id = "prva">
                <h2>Broj <br> birača:</h2>
                <h1 style = "display: none"><?php echo $row['total1'] ?></h1>
                <h1>284684</h1>
            </div>        
            <div class = "card">
                <h2>Broj biračkih mjesta:</h2>
                <h1><?php echo $row2['total2']?></h1>
            </div> 
            <div class = "card">
                <h2>Broj subjekata:</h2>
                <h1><?php echo $row3['total3']?></h1>
            </div> 
           