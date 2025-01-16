<?php
    include('../include/connection.php');
    $query="update leaves set status='Rejected' where lid=$_GET[id]";
    $run=mysqli_query($conn,$query);
    if($run)
        {
            echo "<script type='text/javascript'>
            alert('leaves status updated sucessfully...')
            window.location.href='admin_dashboard.php';
            </script>
            ";
        }
        else{
            echo "<script type='text/javascript'>
            aleet('Error...PLease try again ...')
            window.location.href='admin_dashboard.php';
            </script>
            ";
        }
?>