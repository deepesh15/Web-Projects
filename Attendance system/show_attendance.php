<?php
    /* Once the include path is set it is easy to include the file by name alone */
    set_include_path( __DIR__ . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR );
?>

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
    <th>Student Name</th> <th>Roll No.</th> <th>Year</th> <th>Phone No.</th> <th>Attendance Status</th>
    </tr>
    <?php 
        $result = mysqli_query($con,"select *from attendance_records where date = $_POST[date]");
        $rollnumber=0;
        $counter=0;
        while($row= mysqli_fetch_array($result))
        {
            $rollnumber++;
            
            ?>
            <tr>
            <td> <?php echo $rollnumber; ?></td> 
            <td> <?php echo $row[student_name] ;?></td>
            <td> <?php echo $row[phone_number] ;?></td>

            <td> 
            <input type="radio" name="attendance_status[<?php echo $counter; ?>]" value="Present"> 
            <?php if($row['attendance_status']=="Present") 
            echo"checked = checked "; ?>Present
            <input type="radio" name="attendance_status[<?php echo $counter; ?>]" value="Absent">
            <?php if($row['attendance_status ']=="Absent") 
            echo"checked = checked "; ?>Absent
            
            
            </td>
            </tr>
            <?php
            $counter++;
        }
    ?>
    </table>

    <input  type="submit" name="submit" value="submit" class="btn btn-primary">
    </form>


    </div>
    </div>


</div>
</body>
</html>

