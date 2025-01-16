<?php
    session_start();
    if(isset($_SESSION['email'])){
    include('include/connection.php');


?>
<html>
    <body>
        <center><h3>Leave Status</h3></center>
        <table class="table">
            <tr>
                <th>S.no</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Status</th>
            </tr>
            <?php
                $sno=1;
                $query="select * from leaves where uid=$_SESSION[uid]";
                $run=mysqli_query($conn,$query);
                while($row=mysqli_fetch_array($run)){
                    ?>
                    <tr>
                        <td><?php echo $row[$sno]; ?></td>
                        <td><?php echo $row['subject']; ?></td>
                        <td><?php echo $row['message']; ?></td>
                        <td><?php echo $row['status']; ?></td>
                    </tr>
                    <?php
                }
            ?>
        </table>

    </body>
</html>
<?php
    }
else{
    header('location:user-login.php');
}