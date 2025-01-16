<?php
    include("../include/connection.php")
?>
<html>
    <body>
        <h3>Assigned task </h3>
        <table class="table" style="font-size:18px; width:100%;" id="manage-task">
            <tr>
                <th>S.NO</th>
                <th>Task id</th>
                <th>Description</th>
                <th>Assign Date</th>
                <th>Submition Date</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            <?php
            $sno=1;
               $query="select * from task";
               $run=mysqli_query($conn,$query);
               while($row=mysqli_fetch_array($run)){ 
                ?>
                <tr>
                    <td><?php echo $sno; ?></td>    
                    <td><?php echo $row['tid'];?></td>
                    <td><?php echo $row['description'];?></td>
                    <td><?php echo $row['start_date'];?></td>
                    <td><?php echo $row['end_date'];?></td>
                    <td><?php echo $row['status'];?></td>
                    <td><a href="edit_task.php?id=<?php echo $row['tid'];?>">Edit</a> | <a href="delete_task.php?id=<?php echo $row['tid'];?>">Delete</a></td>
                </tr>
                <?php
                    $sno++; 
               }
            ?>
        </table>
    </body>
</html>