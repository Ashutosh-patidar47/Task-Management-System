<?php
    include("include/connection.php");
    if(isset($_POST['UserRegister']))
    {
        $query="insert into user values(null,'$_POST[name]','$_POST[email]','$_POST[password]','$_POST[mobile]')";  
        $querun = mysqli_query($conn ,$query);
        if($querun)
        {
            echo "<script type='text/javascript'>
            alert('User Registration Successfully....');
            window.location.href='index.php';
            </script>
            ";
        }
        else
        {
            echo "<script type='text/javascript'>
            alert('Error....plz Try Again');
            window.location.href='user-register.php';
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
    <title>REGISTER PAGE</title>
    <!-- jquery file-->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <!--bootstrap file-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <!--external css file-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="row">
        <div class="col-md-3 m-auto" id="register-home">
        <center><h3><b>USER REGISTRATION</b></h3></center>
            <form action="" method="post">
                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Enter your name" required>
                </div><br>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
                </div><br>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
                </div><br>
                <div class="form-group">
                    <input type="digit" name="mobile" class="form-control" placeholder="Enter phone number" required>
                </div><br>
                <div class="form-group">
                    <input type="Submit" name="UserRegister" value="Register" class="btn btn-dark" required>
                </div>
            </form><br>
            <center><a href="index.php" class="btn btn-danger">Go to Home</a></center>
        </div>
    </div>
</body>
</html>