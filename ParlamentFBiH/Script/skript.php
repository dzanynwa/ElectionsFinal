<?php 
include('../../DB/db.php');
?>
                    <tr>
                        <th>
                            Stranka
                        </th>
                        <th>
                            Broj glasova
                        </th>
                    </tr>
                    
                    <?php
                         $id = $_GET['id'];
                         $query = mysqli_query($mysqli, "SELECT Party_ID ,Party_Name, SUM(NumOfVotes) AS votes FROM Party p, Votes v, VotesDetails vd, ElectionUnit e WHERE v.Position = 3 AND p.Party_ID = v.Party AND v.Voting_ID = vd.Votes AND vd.EUnit = e.Unit_ID AND e.Parent_ID = '$id' GROUP BY Party_ID, Party_Name ORDER BY votes DESC");
                    ?>    
                          

                    <?php while($row = mysqli_fetch_assoc($query)) { ?>
                        <tr>
                            <td>
                                <a id="<?php echo $row['Party_ID']?>" onClick="stranka(<?php echo $id ?>,<?php echo $row['Party_ID']?> )" ><?php echo $row['Party_Name']; ?></a>
                            </td>
                            <td>
                                <?php echo $row['votes']; ?>
                            </td>
                        </tr>
                    <?php } ?>
                    
                
