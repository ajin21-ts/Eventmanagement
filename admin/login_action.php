
<?php
session_start();
require("connection.php");
$name=$_REQUEST["name"];
$email=$_REQUEST["email"];
$pass=$_REQUEST["password"];
$res=$con->query(" select * from `admin_table` where `name`='$name' AND `emai_id`='$email' AND `password`='$pass' ");
$count=$res->num_rows;
if($count>0)
{
    $_SESSION["email"]=$email;
    $_SESSION["name"]=$name;
    
    echo "<script type='text/javascript'>alert('welcome to admin dashboard');window.location.href='dashboard.php';</script>";
}
else
{
  
    echo "<script type='text/javascript'>alert('please enter the valid passwor and email');window.location.href='index.php';</script>";
   
}
?>