<?php
require("connection.php");
$cust=$_REQUEST["delete"];
$res=$con->query("select* from`customer_table` where cust_id='$cust'");
$count=$res->num_rows;
if($count>0)
{
   
    
        $row=$res->fetch_assoc();
        $ph=$row["model_photo"];
        unlink("modelphotos/$ph");
        $res=$con->query("delete from `customer_table` where `cust_id`='$cust'");
        $count=mysqli_affected_rows($con);
        header("location:table.php");
       
        
    
    
}
?>

