<?php
require("connection.php");
$name=$_REQUEST["name"];
$email=$_REQUEST["email"];
$mobileno=$_REQUEST["number"];
$password=$_REQUEST["pwd"];
$conpwd=$_REQUEST["conpwd"];
$res=$con->query("insert into `employe_table`(`name`,`email`,`number`,`password`,`confirm_password`) values ('$name','$email','$mobileno','$password','$conpwd')");
$count=mysqli_affected_rows($con);
if($count>0)
{
echo"<script type='text/javascript'>alert('regesterd sucessfully');window.location.href='login.php';</script>";
}
else{
    header("location:customerregister.php");
}
?>