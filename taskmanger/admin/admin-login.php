<?php
    include("../include/connection.php");
    if(isset($_POST['AdminLogin']))
    {
        $query="select email,password,name,id from admins where email='$_POST[email]' AND password='$_POST[password]'";
        $querun=mysqli_query($conn,$query);
        if(mysqli_num_rows($querun ))
        {
            echo "<script type='text/javascript'>
            window.location.href='admin_dashboard.php';
            </script>
            ";
        }
        else
        {
            echo "<script type='text/javascript'>
            alert('Invalid Email and Password..');
            window.location.href='admin-login.php';
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
    <title>ADMIN LOGIN</title>
    <!-- jquery file-->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <!--bootstrap file-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <!--external css file-->
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <div class="row">
        <div class="col-md-3 m-auto" id="login-home">
            <center><h3 id="head"><b>ADMIN LOGIN</b></h3></center>
            <form action="" method="post">
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
                </div><br>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
                </div><br>
                <div class="form-group">
                    <input type="Submit" name="AdminLogin" value="Login" class="btn btn-dark" required>
                </div>
            </form><br>
            <center><a href="../index.php" class="btn btn-danger">Go to Home</a></center>
        </div>
    </div>
</body>
</html>