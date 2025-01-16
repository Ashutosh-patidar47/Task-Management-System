<?php
    session_start();
    if(isset($_SESSION['email'])){
        include('include/connection.php');
        if(isset($_POST['Submit_leave']))
        {
        $query="insert into leaves values(null,$_SESSION[uid],'$_POST[subject]','$_POST[message]','No Action')";
        $run=mysqli_query($conn,$query);
        if($run)
        {
            echo "<script type='text/javascript'>
            alert('Task created sucessfully...')
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
    <script type="text/javascript">
        $(document).ready(function() {
            $("#manage-task").click(function(){
                $("#rightbar").load("tasks.php");
            });
        });
        $(document).ready(function() {
            $("#apply-leave").click(function(){
                $("#rightbar").load("leaveform.php");
            });
        });
        $(document).ready(function() {
            $("#leave-status").click(function(){
                $("#rightbar").load("leave-status.php");
            });
        });
     </script>
</head>
<body id="dash">
    <div class="row" id="header">
        <div class="col-md-12">
            <div class="col-md-4" id="title">
                <h1><B>DASHBOARD</B></h1>
            </div>
            <div class="col-md-6" id="detail">
                <b>Email:</b><?php echo $_SESSION['email'];?>
                <span style="margin-left:25px; font-family:cursive;"><b><br>Name:</b><?php echo $_SESSION['name'];?></span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2" id="leftbar">
        <ul class="menu">
				<li class="active">
					<a href="user-dashboard.php"  type="button">
						<span id="button">Dashboard</span>
					</a>
				</li>
				<li>
					<a id="manage-task"  type="button">
						<span id="button">Update task</span>
					</a>
				</li>
				<li>
					<a id="apply-leave"  type="button">
						<span id="button">Apply leave</span>
					</a>
				</li>
				<li>
					<a id="leave-status"  type="button">
						<span id="button">Leave status</span>
					</a>
				</li>
				<li id="logout">
					<a href="logout.php"  type="button">
						<span id="button">Logout</span>
					</a>
				</li>
			</ul>
        </div>
        <div class="col-md-10" id="rightbar">
            <h2><b>Instruction for Employees</b></h2><br>
            <ul>
                <li>All the Employees should marks there attendence daily.</li>
                <li>Everyone must complete the task assigned to them.</li>
                <li>Kindly maintain decorum of the office.</li>
                <li>keep office and your area neat and clean.</li>
            </ul>
        </div>
    </div>
</body>
</html>
<?php
}
else{
    header('Location:user-login.php');
}?>