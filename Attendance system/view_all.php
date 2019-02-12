<?php
include("db.php");
include("header.php");


?>




<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>ATTENDANCE PORTAL</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Latest compiled and minified CSS --> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 
 </head>
 <div class ="container">
 <h2><div class = "well text-center">ACM ATTENDANCE SYSTEM </div></h2>
 </div>

<body>
<div class ="panel panel-default">
    <div class="panel panel-heading">
    <h2>
    

    <a class ="btn btn-success" href="add.php">Add Students</a>
    <a class ="btn btn-info pull-right" href="index.php">Back</a>
    </h2>
    <div class ="panel panel-body">
    <form action = "index.php" method="Post">
    <table class ="table table-striped">
    <tr>
    <th>Dates</th> <th>Roll Number</th><th>Show Attendance</th>
    </tr>
    <?php 
        $result = mysqli_query($con,"select distinct date from attendance_records");
        $rollnumber=0;
        while($row= mysqli_fetch_array($result))
        {
            $rollnumber++;
            
            ?>
            <tr>
            <td> <?php echo $rollnumber; ?></td>
            <td> <?php echo $row[date] ;?></td>
            <td> <form action ="show_attendance.php">
            <input type ="hidden" value= "<?php echo $row['date']?>" name="date">
            <input type ="submit" value="show attendance" class="btn btn-primary">
            </form></td>


            </tr>
            <?php
            }
    ?>
    </table>

    </form>


    </div>
    </div>


</div>
</body>
</html>

