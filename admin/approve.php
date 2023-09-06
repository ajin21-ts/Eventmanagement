<?php
require("connection.php");
$emp=$_REQUEST["approve"];
$res=$con->query("update `employee_details` set `status`='1'where`emp_id`='$emp'");
$count=mysqli_affected_rows($con);

     header("location:biodata.php?result=approve");



?>