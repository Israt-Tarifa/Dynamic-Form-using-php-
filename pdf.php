<?php
if(!empty($_POST['submit']))
{

  $name = $_POST['name'];
  $id = $_POST['id'];
  $email = $_POST['email'];
  $PhoneNumber = $_POST['PhoneNumber'];
  require("fpdf/fpdf.php");
 
  $pdf = new FPDF();
  $pdf -> Addpage();
 
 $pdf-> SetFont("Arial","",16);
 $pdf-> Cell(0,10,"Registration Details",1,1,'C');
 
 $pdf->Cell(50,10,"Name",1,0);
 $pdf->Cell(25,10,"Roll No.",1,0);
 $pdf->Cell(75,10,"Email",1,0);
 $pdf->Cell(0,10,"Phone Number",1,1);
 
 
 $pdf->Cell(50,10,$name,1,0);
 $pdf->Cell(25,10,$id,1,0);
 $pdf->Cell(75,10, $email,1,0);
 $pdf->Cell(0,10,$PhoneNumber,1,0);

 $file=time().".pdf";
 
 
$pdf -> output();
 
 
  
}

?>