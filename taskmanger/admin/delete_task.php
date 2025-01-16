<?php
    include('../include/connection.php');
    $query="delete from task where tid=$_GET[id]";
    $run=mysqli_query($conn,$query);
    if($run)
    {
        echo "<script type='text/javascript'>
        alert('Task Deleted sucessfully...')
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


?>