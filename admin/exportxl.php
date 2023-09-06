<?php 
// Load the database configuration file 
require("connection.php"); 
 
// Filter the excel data 
function filterData(&$str){ 
    $str = preg_replace("/\t/", "\\t", $str); 
    $str = preg_replace("/\r?\n/", "\\n", $str); 
    if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"'; 
} 
 
// Excel file name for download 
$fileName = "members-data_" . date('Y-m-d') . ".xls"; 
 
// Column names 
$fields = array('SI NO', ' NAME', 'EMAIL', 'GENDER', 'AGE', 'QUALIFICATION', 'EXPERENCE','RESUME'); 
 
// Display column names as first row 
$excelData = implode("\t", array_values($fields)) . "\n"; 
 
// Fetch records from database 
$query = $con->query("SELECT * FROM employee_details ORDER BY emp_id ASC"); 
if($query->num_rows > 0){ 
    // Output each row of the data 
    while($row = $query->fetch_assoc()){ 
       /* $status = ($row['status'] == 1)?'Active':'Inactive';*/
        $lineData = array($row['emp_id'], $row['name'],$row['email'], $row['gender'], $row['age'], $row['qualification'],$row['experience'],$row['resume'] ); 
        array_walk($lineData, 'filterData'); 
        $excelData .= implode("\t", array_values($lineData)) . "\n"; 
    } 
}else{ 
    $excelData .= 'No records found...'. "\n"; 
} 
 
// Headers for download 
header("Content-Type: application/vnd.ms-excel"); 
header("Content-Disposition: attachment; filename=\"$fileName\""); 
 
// Render excel data 
echo $excelData; 
 
exit;
?>
