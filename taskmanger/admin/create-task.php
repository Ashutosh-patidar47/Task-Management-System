<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <div class="row" >
    <h3><b>Create task here</b></h3><br>
        <div class="col-md-6" >
            <form action="" method="post"  id="create-task">
                <div class="form-group" >
                    <label>Select User:</label>
                    <select class="form-control" name="id" >
                        <option>-Select-</option>
                        <?php
                           include("../include/connection.php");
                           $query="select uid,name from user";
                           $run=mysqli_query($conn,$query);
                           if(mysqli_num_rows($run)){
                                while($row=mysqli_fetch_assoc($run))
                                {
                                    ?>
                                    <option value="<?php echo $row['uid']; ?>"
                                    ><?php echo $row['name']; ?></option>
                                    <?php
                                }
                            }
                        
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Description:</label>
                    <textarea class="form-control" row="10" cols="50" name="description" placeholder="Mention the task">

                    </textarea>
                </div>
                <div class="form-group">
                    <label>Assign date:</label>
                    <input type="date" class="form-control" name="start_date">
                </div>
                <div class="form-group">
                    <label>Submition date:</label>
                    <input type="date" class="form-control" name="end_date">
                </div><br><br>
                <input type="Submit" class="btn btn-danger" name="create_task" value="Create task">
            </form>
        </div>
    </div>


</body>
</html>