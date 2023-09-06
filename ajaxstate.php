<?php
//$cert_type=$_POST['cert_type'];

$Country=$_POST['Country'];
require('connection.php');
				 
$res=$con->query("SELECT * FROM `states` WHERE country_id='$Country'");
$count=$res->num_rows;



if($count>0)

						{
							while($row=$res->fetch_assoc())
							{
							?>
								<option value="<?php echo $row["stat_id"];?>"><?php echo $row["sname"];?> </option>
								<?php
							}
						}

else{
	
	echo "No Result found";
}
				 
				  
				  ?>