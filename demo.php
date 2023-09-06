<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font -->
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
</head>
<body>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Access restricted</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <p>To submit this form you must login first</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="login.php" type="button" class="btn btn-primary">Login</a>
      </div>
    </div>
  </div>
</div>
</body>
</html>

<?php
session_start();
if(empty($_SESSION["email"])){
       $error_msg = "<div class='login-modal'>Username or password is incorrect</div>";
            $script = "<script> $(document).ready(function(){ $('#login-modal').modal('show'); }); </script>";
        

}
 else{
require("connection.php");
$name=$_REQUEST["name"];
$email=$_REQUEST["email"];
$gender=$_REQUEST["gender"];
$age=$_REQUEST["age"];
$qul=$_REQUEST["qual"];
$exp=$_REQUEST["exp"];
$resume=$_FILES["resume"]["name"];
       $res=$con->query("insert into `employee_details`(`name`,`email`,`gender`,`age`,`qualification`,`experience`,`resume`)values('$name','$email','$gender','$age','$qul','$exp','$resume')");
       $count=mysqli_affected_rows($con);
        move_uploaded_file($_FILES["resume"]["tmp_name"],"employeeresume/".$resume);


        header("location:contact.php");
 }
      



?>