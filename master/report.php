<?php
include("connection.php");
require_once('tcpdf/tcpdf.php');

date_default_timezone_set('Asia/Kolkata');
session_start();


ob_start(); // start output buffering
// Set document information
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('PDF');
$pdf->SetTitle('Sales Report');
$pdf->SetSubject('Sales Report');
$pdf->SetKeywords('Sales Report');

// Set default font
$pdf->SetFont('helvetica', '', 12);

// Add a page
$pdf->AddPage();


?>

<?php 
// Get daily sales report
$sql = "SELECT * FROM tbl_attend WHERE STATUS='absent' OR STATUS='present'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Include the PDF library
   
    $pdf->Cell(0, 8, 'Report ID: ' . $reportId, 0, 1);
    $pdf->Cell(0, 10, 'Date: ' . date('Y-m-d H:i:s'), 0, 1);
    $pdf->SetFont('helvetica', '', 11);

    // Set the Y position to 30 units
    $pdf->SetY(34);

    // Output report header
    $pdf->SetFont('helvetica', 'B', 18);
    $pdf->Cell(0, 14, 'Dance', 0, 1, 'C');
    $pdf->SetFont('helvetica', '', 15);
    $pdf->Cell(0, 10, 'Attendance', 0, 1, 'C');

    $pdf->Ln(12); // Add space between tables

    // Output table header
    $pdf->SetFont('helvetica', 'B', 14);
    $pdf->Cell(40, 7, 'STUDENT NAME', 1, 0, 'C');
    $pdf->Cell(40, 7, 'COURSE NAME', 1, 0, 'C');
    $pdf->Cell(30, 7, 'DATE', 1, 0, 'C');
    $pdf->Cell(40, 7, 'ACTION', 1, 0, 'C');
    $pdf->Ln();

    // Loop through the results for each row
    while ($row = $result->fetch_assoc()) {
        // Output table rows
        $pdf->SetFont('helvetica', '', 10);
        $pdf->Cell(40, 7, $row['studentname'], 1, 0, 'C');
        $pdf->Cell(40, 7, $row['coursename'] . ' (' . $row['weight'] . ')', 1, 0, 'C');
        $pdf->Cell(30, 7, $row['date'], 1, 0, 'R');
        $pdf->Cell(40, 7, $row['status'], 1, 0, 'R');
        $pdf->Ln();
    }
}
	
$pdf->Ln(5);

$pdf->SetY($pdf->GetY() + 30);

 
	$pdf->Cell(0, 7, 'End of Report', 0, 1, 'C'); // Outp

$pdf->writeHTML($html);


ob_end_clean();
    // Write sales report table to PDF
    
    // Close database connection
    $conn->close();

    // Output PDF to the browser
    $pdf->Output('sales_report.pdf', 'I'); // 'I' opens the PDF in the browser window

?>
<!-- Add a link/button to download the PDF file -->
<a href="sales_report.pdf" download>Download Sales Report</a>
?>
<div>

	
						
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->
	

	