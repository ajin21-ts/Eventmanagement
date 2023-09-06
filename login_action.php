<?php
session_start();
require("connection.php");
$email=$_REQUEST["email"];
$password=$_REQUEST["pwd"];
$message=("Enter a valid password and email!..");
$res=$con->query("select*from`employe_table` where `email`='$email'AND`password`='$password'");
$count=$res->num_rows;
if($count>0)
{
    $row=$res->fetch_assoc();
    $ai=$row["employe_id"];
    $_SESSION["email"]=$email;
    $_SESSION["employe_id"]=$ai;
    header("location:index.php");
}
else
{
   echo"<script type='text/javascript'>alert('$message');window.location.href='login.php';</script>";
}

?>