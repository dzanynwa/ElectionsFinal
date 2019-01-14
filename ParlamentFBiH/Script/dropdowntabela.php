<?php 
include('../../DB/db.php');
?>


<?php


     $id = $_GET['id'];
 echo $id;
    $query = mysqli_query($mysqli,"SELECT DISTINCT C_Fname, C_Lname, Party_Name, NumOfVotes 
    FROM Candidate c, Party p, Votes v, ElectionUnit e, VotesDetails vd 
    WHERE c.Candidate_ID = v.Candidate AND p.Party_ID = v.Party AND v.Position = 3 AND vd.Votes = v.Voting_ID AND vd.EUnit = e.Unit_ID AND e.Unit_Name = '$id' 
    ORDER BY NumOfVotes DESC");
   



?>
                    <tr>
                        <th>
                            Kandidat
                        </th>
                        <th>
                            Stranka
                        </th>
                        <th>
                            Broj Glasova
                        </th>
                    </tr>
                    

                      

                   <?php while ($row = mysqli_fetch_assoc($query)) { ?>

                        <tr>
                            <td>
                               <?php echo $row['C_Fname']." ".$row['C_Lname'] ; ?>
                            </td>
                            <td>
                               <?php echo $row['Party_Name']; ?>
                               </td>
                            <td>
                               <?php echo $row['NumOfVotes'] ; ?>                               
                            </td>
                        </tr>
                        <?php } ?>



