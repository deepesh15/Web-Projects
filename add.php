<?php


include("header.php");
include("db.php");
if(isset($_POST['submit']))
{
    $result =mysqli_query($con,"insert  into attendance(student_name,roll_number)values('$_POST[name]','$_POST[roll]','$_POST[year]','$_POST[phone]')");

    if($result)
    {
        $flag =1;
    }
}


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

 <div class="panel panel-default">
        <?php if($flag){ ?>
    
        <div class="alert alert-success">
        <strong>Your attendance has been marked</strong>
        </div>
        <?php }?>
        <div class ="panel-heading">
        <h2>
        <a class ="btn btn-success" href ="add.php"> Add Student </a>
        <a class ="btn btn-info pull-right" href = "index.php"> Back </a>     
        </h2>

        </div>

        <div class="panel-body">
        <form action= "add.php" method = "post">

        <div class="form-group">
        <label for = "name">Student Name</label>
        <input type="text" name="name" id="name" class="form-control" required>

        </div>

        <div class="form-group">
        <label for = "name">Roll Number</label>
        <input type="text" name="roll" id="roll" class="form-control" required>

        </div>

        <div class="form-group">
        <label for = "name">Yr.</label>
        <input type="text" name="year" id="year" class="form-control" required>

        </div>

        <div class="form-group">
        <label for = "name">Phone Number (WhatsApp)</label>
        <input type="text" name="phone" id="phone" class="form-control" required>

        </div>

        <div class="form-group">
        <input type="Submit" name="submit" value="Submit" class="btn btn-primary" required>

        </div>
    </div>


 </html>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
