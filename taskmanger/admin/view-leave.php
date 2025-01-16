<?php
    include("../include/connection.php");
?>
<html lang="en">
<body>
    <center><h3>All Leave Application</h3></center>
    <table class="table" style="background_color:whitesmoke;widht:75vw;">
        <tr>
            <th>S.no</th>
            <th>User</th>
            <th>Subject</th>
            <th>Message</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        <?php
            $sno=1;
            $query="select * from leaves";
            $run=mysqli_query($conn,$query);
            while($row=mysqli_fetch_assoc($run)){
                ?>
                <tr>
                    <td><?php echo $sno;?></td>
                    <?php 
                    $query1="select name from user where uid = $row[uid]";
                    $run1=mysqli_query($conn,$query1); 
                    while($row1=mysqli_fetch_assoc($run1)){
                        ?>
                        <td><?php echo $row1['name'];?></td>
                        <?php
                        }
                    ?>
                    <td><?php echo $row['subject'];?></td>
                    <td><?php echo $row['message'];?></td>
                    <td><?php echo $row['status'];?></td>
                    <td><a href="approved-leave.php?id=<?php echo $row['lid'];?>">Approved</a> | <a href="reject-leave.php?id=<?php echo $row['lid'];?>">Reject</a></td>
                </tr>
                <?php 
            }
        ?>
    </table>
</body>
</html>