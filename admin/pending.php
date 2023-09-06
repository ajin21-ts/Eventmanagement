<?php
require("connection.php");
$emp=$_REQUEST["pending"];
$res=$con->query("update `employee_details` set `status`='0'where`emp_id`='$emp'");
$count=mysqli_affected_rows($con);

     echo"<script type='text/javascript'>alert('Pending');window.location.href='biodata.php';</script>";



?>