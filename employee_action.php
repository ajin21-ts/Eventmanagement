
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <!-- bootstrap-css -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">

</head>
<body>
<?php
session_start();
if(empty($_SESSION["email"])){
       

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
$ai=$_SESSION["employe_id"];

       $res=$con->query("insert into `employee_details`(`name`,`email`,`gender`,`age`,`qualification`,`experience`,`resume`,`job_id`)values('$name','$email','$gender','$age','$qul','$exp','$resume','$ai')");
       $count=mysqli_affected_rows($con);
       
        move_uploaded_file($_FILES["resume"]["tmp_name"],"admin/employeeresume/".$resume);
        header("location:contact.php?result=success");


        
 }
      

?>

       <div class="modal fade" id="login-modal" tabindex="-1" role="dialog"style="color-white" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
              <div class="modal-dialog">
                    <div class="loginmodal-container">
                        <?php if(isset($error_msg)){ echo $error_msg; } ?>
                            <div class="modal-dialog" role="document">
                                   <div class="modal-content">
                                          <div class="modal-header">
                                                 <h2 class="modal-title" id="exampleModalLabel">Access restricted</h2>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                               <span aria-hidden="true">&times;</span>
                                                        </button>
                                          </div>
                                   <div class="modal-body">
                                          <p>To submit this form you must login first</p>
                                   </div>
                                   <div class="modal-footer">
                                          <a href="contact.php" type="button" class="btn btn-danger">Close</button>
                                          <a href="login.php" type="button" class="btn btn-primary">Login</a>
                                   </div>
                            </div>
                     </div>
              </div>
       </div>
              

    <?php if(isset($script)){ echo $script; } ?>`

</body>
</html>



