<?php
include('../../DB/db.php');
?>
                    
                    <?php
                         $id = $_GET['id'];
                         $query = mysqli_query($mysqli, "SELECT C_Fname, C_Lname, Party_Name, SUM(NumOfVotes) AS votes FROM Candidate c, Party p, VotesDetails vd, Votes v, ElectionUnit e WHERE v.Position = 6 AND c.Candidate_ID = v.Candidate AND p.Party_ID = v.Party AND v.Voting_ID = vd.Votes AND e.Unit_ID = vd.EUnit AND e.Parent_ID = 209 GROUP BY C_Fname, C_Lname, Party_Name ORDER BY votes DESC");
                    ?>    
                          

                    <?php while($row = mysqli_fetch_assoc($query)) { ?>
                        
                    <?php } ?>

                    
                        
