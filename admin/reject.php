<?php
require("connection.php");
$emp=$_REQUEST["reject"];
$res=$con->query("update `employee_details` set `status`='2'where`emp_id`='$emp'");
$count=mysqli_affected_rows($con);

     header("location:biodata.php?result=reject");



?>