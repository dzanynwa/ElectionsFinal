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
                         $query = mysqli_query($mysqli, "SELECT C_Fname, C_Lname, Party_Name, NumOfVotes FROM Candidate c, Party p, VotesDetails vd, Votes v, ElectionUnit e WHERE c.Candidate_ID = v.Candidate AND p.Party_ID = v.Party AND v.Voting_ID = vd.Votes AND e.Unit_ID = vd.EUnit AND e.Unit_ID = '$id'");
                    ?>    
                          

                    <?php while($row = mysqli_fetch_assoc($query)) { ?>
                        <tr>
                            <td>
                                <?php echo $row['C_Fname'].' '.$row['C_Lname']; ?>
                            </td>
                            <td>
                                <?php echo $row['Party_Name']; ?>
                            </td>
                            <td>
                                <?php echo $row['NumOfVotes']; ?>
                            </td>
                        </tr>
                    <?php } ?>