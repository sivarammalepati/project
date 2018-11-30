<?php
session_start();
include "config.php";
?>
<table width="100%" >
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>name</th>
                                        <th>location</th>
                                        <th>spouse</th>
                                        <th>marriage day</th>
                                        <th>bridefblink</th>
                                        <th>bridetwitterlink</th>
                                        <th>brideinstagramlink</th>
                                        <th>groomfblink</th>
                                        <th>groomtwitter</th>
                                        <th>groominstagramlink</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
<?php
$select_data="select * from videos";
$select_result=mysqli_query($conn,$select_data);                                   
if(mysqli_num_rows($select_result) > 0)
{
    while($rec = mysqli_fetch_array($select_result))
    {
        ?>
                                    <tr>
 <td><?php  echo $rec[0];?></td>
<td><?php echo $rec[1];?></td>
<td><img src="<?php echo $rec[2];?>" height="123" width="50"></td>
<td><?php echo $rec[3];?></td>
<td><?php echo $rec[4];?></td>
<td><?php echo $rec[5];?></td>
<td><?php echo $rec[6];?></td>
<td><?php echo $rec[7];?></td>
<td><?php echo $rec[8];?></td>
<td><?php echo $rec[9];?></td>
                                        <td><?php echo $rec[10];?></td></tr>
                                    <?php
}

}
?>


                                    

                                </tbody>
                            </table>