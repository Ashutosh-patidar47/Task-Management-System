<?php
    include("../include/connection.php");
    if(isset($_POST["edit_task"]))
    {
        $query ="update task set uid = $_POST[id],description='$_POST[description]',start_date='$_POST[start_date]',end_date='$_POST[end_date]' where tid=$_GET[id]";
        $run=mysqli_query($conn,$query);
        if($run)
        {
            echo "<script type='text/javascript'>
            alert('Task updated sucessfully...')
            window.location.href='admin_dashboard.php';
            </script>
            ";
        }
        else{
            echo "<script type='text/javascript'>
            aleet('PLease try again ...')
            window.location.href='admin_dashboard.php';
            </script>
            ";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN PAGE</title>
    <!-- jquery file-->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <!--bootstrap file-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <!--external css file-->
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <div class="row" id="header">
        <div class="col-md-12">
            <h3>TASK Management System</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 m-auto">
            <h3>Edit the task</h3>
            <?php
                $query="select * from task where tid = $_GET[id]";
                $run=mysqli_query($conn,$query);
                while($row=mysqli_fetch_array($run))
                { ?>
                    <form action="" method="post">
                    <div class="form-group">
                    <input type="hidden" name="id" class="form-control" value="" required>
                    </div>
                    <div class="form-group">
                        <label>Select User:</label>
                            <select class="form-control" name="id">
                                <option>-Select-</option>
                                <?php
                                    $query1="select uid,name from user";
                                    $run1=mysqli_query($conn,$query1);
                                    if(mysqli_num_rows($run1)){
                                        while($row1=mysqli_fetch_assoc($run1))
                                        {
                                        ?>
                                            <option value="<?php echo $row1['uid']; ?>"><?php echo $row1['name']; ?></option>
                                            <?php
                                        }
                                    }
                                ?>
                            </select>
                    </div>
                    <div class="form-group">
                        <label>Description:</label>
                        <textarea class="form-control" row="10" cols="50" name="description" required>
                            <?php echo $row['description']; ?>
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label>Assign date:</label>
                        <input type="date" class="form-control" name="start_date" value="<?php echo $row['start_date']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Submition date:</label>
                        <input type="date" class="form-control" name="end_date" value="<?php echo $row['end_date']; ?>" required>
                    </div><br><br>
                    <input type="Submit" class="btn btn-danger" name="edit_task" value="Update">
                </form>
                <?php
                }
            ?>
        </div>
    </div>
</body>
</html>