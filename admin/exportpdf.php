
<?php
//include connection file 
include ("connection.php");
include_once('fpdf/fpdf.php');

class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('images/logo.png',10,10,20);
    $this->SetFont('Arial','B',13);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(80,10,'Employee details',1,0,'C');
    // Line break
    $this->Ln(20);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-25);
    // Arial italic 8
    $this->SetFont('Arial','I',4);
    // Page number
    $this->Cell(10,30,'Page '.$this->PageNo().'/{nb}',10,10,'C');
}
}

$display_heading = array('emp_id'=>'ID', 'name'=> 'Name', 'email'=> 'Email','gender'=> 'Gender','age'=> 'Age','qualification'=>'Qualification','experience'=>'Experience','resume'=>'Resume0','job_id'=>'Jobid','status'=>'Status');

$result = mysqli_query($con, "SELECT emp_id,name,email,gender,age,qualification,experience,resume,job_id,status FROM employee_details") or die("database error:". mysqli_error($con));
$header = mysqli_query($con, "SHOW columns FROM employee_details ");

$pdf = new PDF();
//header
$pdf->AddPage();
//foter page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',6);
foreach($header as $heading) {
    $pdf->Cell(19,10,$display_heading[$heading['Field']],1);
    }
foreach($result as $row) {
$pdf->SetFont('Arial','',4);
$pdf->Ln();
foreach($row as $column)
$pdf->Cell(19,10,$column,1);
}
$pdf->Output();
?>
