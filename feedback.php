<?php
require("connection.php");
$name=$_REQUEST["name"];
$mail=$_REQUEST["email"];
$country=$_REQUEST["countries"];
$state=$_REQUEST["states"];
$msg=$_REQUEST["message"];

$res=$con->query("insert into `feedback_table`(`custname`,`custemail`,`cust_country`,`cust_state`,`message`) values('$name','$mail','$country','$state','$msg')");
$count=mysqli_affected_rows($con);
if($count>0)
{

    header("location:about.php");
}
else
{
    header("location:contact.php");
}
?>
