<?php 
include('../../DB/db.php');
?>
                    <tr>
                        <th>
                            Ime
                        </th>
                        <th>
                            Prezime
                        </th>
                        <th>
                            Broj glasova
                        </th>
                    </tr>
                    
                    <?php
                         $regija = $_GET['regija'];
                         $stranka = $_GET['stranka'];
                      

                         $query = mysqli_query($mysqli, "SELECT C_Fname, C_Lname, SUM(NumOfVotes) AS votes FROM Candidate c, Votes v, VotesDetails vd, ElectionUnit e, Party p, Position po WHERE po.Position_ID = v.Position AND v.Position = 2 AND c.Candidate_ID = v.Candidate AND v.Voting_ID = vd.Votes AND vd.EUnit = e.Unit_ID AND e.Parent_ID = '$regija' AND p.Party_ID = v.Party AND p.Party_ID = '$stranka' GROUP BY C_Fname, C_Lname ORDER BY votes DESC");
                    ?>    
                          

                    <?php while($row = mysqli_fetch_assoc($query)) { ?>
                        <tr>
                            <td>
                                <?php echo $row['C_Fname']?>
                            </td>
                            <td>
                                <?php echo $row['C_Lname']?>
                            </td>
                            <td>
                                <?php echo $row['votes']; ?>
                            </td>
                        </tr>
                    <?php } ?>
                