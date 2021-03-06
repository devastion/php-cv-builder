<?php
require './includes/fpdf/fpdf.php';
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$position = $_POST['position'];
$primary = $_POST['primary'];
$secondary = $_POST['secondary'];
$startYearEdu = $_POST['startYear'];
$gradYearEdu = $_POST['gradYear'];
$institution = $_POST['institution'];
$startYearExp = $_POST['startExp'];
$leavingYear = $_POST['leaving'];
$job = $_POST['job'];
$additionalInfo = $_POST['info'];

$pdf = new FPDF();

$pdf->AddPage();
$pdf->SetAutoPageBreak(true, 0);
$pdf->SetFont('Arial', 'B', 24);
$pdf->CreateCell("B", 24, 100, 10, $fname, 1, "L", 30, 0, 0, 0);
$pdf->CreateCell("B", 24, 100, 10, $lname, 1, "L", 10, 0, 0, 0);
$pdf->CreateCell("", 16, 100, 10, $position, 0, "L", 0, 0, 0, 0);
$pdf->CreateCell("", 16, 0, 10, $phone, 1, "R", 10, 0, 10, 0);
$pdf->CreateCell("", 16, 100, 10, $email, 0, "L", 10, 0, 0, 0);
$pdf->CreateCell("", 16, 0, 10, $address, 1, "R", 0, 0, 10, 0);
$pdf->CreateCell("B", 24, 0, 25, "Education", 1, "C", 10, 0, 0, 0);
$pdf->CreateCell("", 18, 48, 10, "Primary school - ", 0, "L", 0, 0, 0, 0);
$pdf->CreateCell("", 18, 0, 10, $primary, 1, "L", 10, 0, 0, 0);
$pdf->CreateCell("", 18, 57, 10, "Secondary school - ", 0, "L", 0, 0, 0, 0);
$pdf->CreateCell("", 18, 0, 10, $secondary, 1, "L", 10, 0, 0, 0);
for ($i = 0; $i < count($institution); $i++) {
    $pdf->CreateCell("", 18, 0, 10, $startYearEdu[$i] . " to " . $gradYearEdu[$i] . " - " . $institution[$i], 1, "L", 10, 0, 0, 0);
}
$pdf->CreateCell("B", 24, 0, 25, "Experience", 1, "C", 10, 0, 10, 0);
for ($i = 0; $i < count($job); $i++) {
    $pdf->CreateCell("", 18, 0, 10, $startYearExp[$i] . " to " . $leavingYear[$i] . " - " . $job[$i], 1, "L", 10, 0, 0, 0);
    $pdf->CreateCell("", 16, 0, 10, $additionalInfo[$i], 1, "L", 10, 0, 0, 1);
    $pdf->Ln();
}
if (isset($_SESSION["sessionid"]) && isset($_POST["generate-form"])) {
    $currentUser = $_SESSION["sessionuser"];
    $dirName = "./archives/".$currentUser;
    if(!file_exists($dirName)){
        mkdir($dirName);
    }
    $fileCount = 0;
    $files = glob($dirName."/*");
    if($files){
        $fileCount = count ($files);
    }

    $fileName = "CV".$fileCount.".pdf";
    $pdf -> Output($dirName."/".$fileName, "F");


}
$pdf->Output();

}