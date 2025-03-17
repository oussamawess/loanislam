<?php
require('fpdf186/fpdf.php'); // Include FPDF library
include 'db.php';

// Fetch payment details
$client_id = $_GET['client_id']; // Get client ID from request
$amount = $_GET['amount']; // Get paid amount

// Fetch client details if needed
$query = "SELECT nom, prenom, email FROM client WHERE id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $client_id);
$stmt->execute();
$result = $stmt->get_result();
$client = $result->fetch_assoc();
$stmt->close();

// Create PDF
$pdf = new FPDF();
$pdf->AddPage();

$pdf->SetFont('Arial', 'B', 16);
// $pdf->SetFont('DejaVuSans', '', 12);

// $text = 'reçu';

// Logo
$pdf->Image('../assets/images/logos/loanislam.png', 10, 10, 40); // Adjust path to your logo

// Title
$pdf->Cell(190, 20, "Preuve de paiement", 0, 1, 'C');

// Client Info
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(190, 10, "Client: " . $client['nom']." ".$client['prenom'] , 0, 1, 'L');
$pdf->Cell(190, 10, "Email: " . $client['email'], 0, 1, 'L');
$pdf->Ln(5);

// Payment Details
$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(190, 10, "Montant Paye: " . number_format($amount, 2) . " EUR", 0, 1, 'L');

// Footer
$pdf->SetFont('Arial', 'I', 10);
$pdf->Cell(190, 10, "Merci pour votre paiement.", 0, 1, 'C');

// Output PDF
$pdf->Output("D", "Preuve_de_paiement_$client_id.pdf"); // Force download
?>