<?php 

include('../connection/config.php');
include('../connection/fpdf184/fpdf.php');
include('../connection/verifica.php');

$relatorio = "SELECT * FROM relatorio WHERE id_usuario = '" . $_SESSION["id_usuario"] . "'";

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(40, 10, utf8_decode('Relatório de Mangás'));
$pdf->Ln(15);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(100, 10, utf8_decode('Nome'), 1, 0, 'C');
$pdf->Cell(40, 10, utf8_decode('Quantidade'), 1, 0, 'C');
$pdf->Cell(40, 10, utf8_decode('Preço'), 1, 0, 'C');
$pdf->Ln(15);

foreach($con->query($relatorio) as $row) {
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(100, 10, utf8_decode($row['titulo']), 1, 0, 'C');
    $pdf->Cell(40, 10, utf8_decode($row['quantidade']), 1, 0, 'C');
    $pdf->Cell(40, 10, utf8_decode($row['preco']), 1, 0, 'C');
    $pdf->Ln(15);
}

$pdf->Output();

?>