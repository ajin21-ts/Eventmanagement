<?php
require("connection.php");
$name=$_REQUEST["name"];
$email=$_REQUEST["email"];
$password=$_REQUEST["pwd"];
$confpwd=$_REQUEST["conpwd"];
$res=$con->query("insert into `admin_table`(`name`,`emai_id`,`password`,`confirm_pwd`)values('$name','$email','$password','$confpwd')");
$count=mysqli_affected_rows($con);
if($count>0){
    echo "<script type='text/javascript'>alert('signup successfully');window.location.href='index.php';</script>";
}
else{
    header("location:signup.php");
}
?>