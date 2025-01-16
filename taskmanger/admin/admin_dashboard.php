<?php
    // session_start();
    // if(isset($_SESSION['email'])){
    include("../include/connection.php");
    if(isset($_POST['create_task']))
    {
        $query = "insert into task values(null,$_POST[id],'$_POST[description]','$_POST[start_date]','$_POST[end_date]','Not Started')";
        $run = mysqli_query($conn,$query);
        if($run)
        {
            echo "<script type='text/javascript'>
            alert('Task created sucessfully...')
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

    <!-- jquery code-->
     <script type="text/javascript">
        $(document).ready(function() {
            $("#create_task").click(function(){
                $("#rightbar").load("create-task.php");
            });
        });
        $(document).ready(function() {
            $("#manage_task").click(function(){
                $("#rightbar").load("manage-task.php");
            });
        });
        $(document).ready(function() {
            $("#view_leave").click(function(){
                $("#rightbar").load("view-leave.php");
            });
        });
     </script>

</head>
<body>
    <div class="row" id="header">
        <div class="col-md-12">
            <div class="col-md-4" id="title">
                <h1><B>ADMIN DASHBOARD</B></h1>
            </div>
            <div class="col-md-6" id="detail">
                <b>Email:</b>admin@gmail.com
                <span style="margin-left:25px;"><b>Name: </b>admin User</span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2" id="leftbar">
        <ul class="menu">
				<li class="active">
					<a href="admin_dashboard.php" id="logout_link">
						<span>Dashboard</span>
					</a>
				</li>
				<li>
					<a id="create_task" type="button">
						<span>Create task</span>
					</a>
				</li>
				<li>
					<a id="manage_task"  type="button">
						<span>Mange task</span>
					</a>
				</li>
				<li>
					<a  id="view_leave"  type="button">
						<span>Leave Applications</span>
					</a>
				</li>
				<li id="logout">
					<a href="../index.php"  type="button">
						<span>Logout</span>
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
//}
// else{
//     header('Location:admin-login.php');
// }?>