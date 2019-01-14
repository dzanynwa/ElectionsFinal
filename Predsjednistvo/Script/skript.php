<?php 
include('../../DB/db.php');
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
                    
                    <?php
                         $id = $_GET['id'];
                         $query = mysqli_query($mysqli, "SELECT C_Fname, C_Lname, Party_Name, SUM(NumOfVotes) AS votes FROM Candidate c, Party p, Votes v, VotesDetails vd WHERE c.Candidate_ID = v.Candidate AND p.Party_ID = v.Party AND v.Position = 1 AND v.Voting_ID = vd.Votes AND (c.C_Nationality = '$id') GROUP BY C_Fname, C_Lname, Party_Name");
                    ?>    
                          

                    <?php while($row = mysqli_fetch_assoc($query)) { ?>
                        <tr>
                            <td>
                                <?php echo $row['C_Fname'].' '.$row['C_Lname']; ?>
                            </td>
                            <td class = "vise">
                                <?php echo $row['Party_Name']; ?>
                            </td>
                            <td class = "manje">
                                <?php echo $row['votes']; ?>
                            </td>
                        </tr>
                    <?php } ?>
                
                    
                
