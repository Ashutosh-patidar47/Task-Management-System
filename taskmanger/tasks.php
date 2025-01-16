<?php
    session_start();
    include('include/connection.php');
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jquery file-->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <!--bootstrap file-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <!--external css file-->
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
    <center><h3>Your Task</h3></center>
    <table class="table" style="background-color:white;width:75vw;">
        <tr>
            <th>S.no</th>
            <th>Task ID</th>
            <th>Task</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        <?php
            
            $query="select * from task where uid=$_SESSION[uid]";
            $sno=1;
            $run=mysqli_query($conn,$query);
            while($row=mysqli_fetch_assoc($run)){
                ?>
                <tr>
                    <td><?php echo $sno;?></td>
                    <td><?php echo $row['tid'];?></td>
                    <td><?php echo $row['description'];?></td>
                    <td><?php echo $row['start_date'];?></td>
                    <td><?php echo $row['end_date'];?></td>
                    <td><?php echo $row['status'];?></td>
                    <td><a href="update_status.php?id=<?php echo $row['tid'];?>">Update</a></td>
                </tr>
                <?php 
                $sno=$sno+1;
            }
        ?>
    </table>
</body>
</html>