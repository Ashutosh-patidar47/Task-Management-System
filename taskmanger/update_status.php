<?php
    include("include/connection.php");
    if(isset($_POST["update"]))
    {
        $query ="update task set status = '$_POST[Status]' where tid = $_GET[id]";
        $run=mysqli_query($conn,$query);
        if($run)
        {
            echo "<script type='text/javascript'>
            alert('Task updated sucessfully...')
            window.location.href='user-dashboard.php';
            </script>
            ";
        }
        else{
            echo "<script type='text/javascript'>
            aleet('PLease try again ...')
            window.location.href='user-dashboard.php';
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
    <title>USER PAGE</title>
    <!-- jquery file-->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <!--bootstrap file-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <!--external css file-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="row" id="header">
        <div class="col-md-12">
            <h3 id="headcss"><center>TASK Management System</center></h3>
        </div>
    </div><br><br><br>
    <div class="row">
        <div class="col-md-4 m-auto">
            <h3>Update</h3>
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
                        <select class="form-control" name="Status">
                            <option>-Select-</option>
                            <option>In-Progress</option>
                            <option>Complete</option>
                        </select>
                    </div>
                    <input type="Submit" class="btn btn-danger" name="update" value="Update">
                </form>
                <?php
                }
            ?>
        </div>
    </div>
</body>
</html>