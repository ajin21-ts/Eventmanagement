
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
    $mail=$_REQUEST["email"];
    $gender=$_REQUEST["gender"];
    $add=$_REQUEST["address"];
    $mob=$_REQUEST["number"];
    $fname=$_REQUEST["funname"];
    $fdate=$_REQUEST["fundate"];
    $modpic=$_FILES["modelph"]["name"];
    
    $res=$con->query(" insert into `customer_table`(`cust_name`,`cust_emailid`,`cust_gender`,`cust_address`,`cust_mobileno`,`function_name`,`function_date`,`model_photo`) values('$name','$mail','$gender','$add','$mob','$fname','$fdate','$modpic')");
    $count=mysqli_affected_rows($con);
    
        move_uploaded_file($_FILES["modelph"]["tmp_name"],"modelphotos/".$modpic);
       
    
        header("location:contact.php?result=booked");
        
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
