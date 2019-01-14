<?php
include('../../DB/db.php');
?>
                    <tr>
                        <th>
                            Stranka
                        </th>
                        <th>
                            Broj Glasova
                        </th>
                    </tr>
                    
                    <?php
                         $id = $_GET['id'];
                         $query = mysqli_query($mysqli, "SELECT Party_Name, Party_ID, SUM(NumOfVotes) AS votes FROM Party p, VotesDetails vd, Votes v, ElectionUnit e WHERE v.Position = 5 AND p.Party_ID = v.Party AND v.Voting_ID = vd.Votes AND e.Unit_ID = vd.EUnit AND e.Parent_ID = '$id' GROUP BY Party_Name, Party_ID ORDER BY votes DESC");
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
