<?php 

include('../connection/config.php');
include('../connection/fpdf184/fpdf.php');
include('../connection/verifica.php');

function invdata($data)
{
    $parte = explode("-", $data);
    return ($parte[2] . "-" . $parte[1] . "-" . $parte[0]);
}

$relatorio = "SELECT * FROM relatorio WHERE id_usuario = '" . $_SESSION["id_usuario"] . "'";
$query_valor = "SELECT SUM(preco) AS valor_total FROM relatorio WHERE id_usuario = '" . $_SESSION["id_usuario"] . "'";

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(40, 10, utf8_decode('Relatório de Mangás'));
$pdf->Ln(15);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(100, 10, utf8_decode('Nome'), 1, 0, 'C');
$pdf->Cell(20, 10, utf8_decode('Qntd'), 1, 0, 'C');
$pdf->Cell(30, 10, utf8_decode('Preço'), 1, 0, 'C');
$pdf->Cell(40, 10, utf8_decode('Data'), 1, 0, 'C');
$pdf->Ln(10);

foreach($con->query($relatorio) as $row) {
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(100, 10, utf8_decode($row['titulo']), 1, 0, 'C');
    $pdf->Cell(20, 10, utf8_decode($row['quantidade']), 1, 0, 'C');
    $pdf->Cell(30, 10, utf8_decode($row['preco']), 1, 0, 'C');
    $pdf->Cell(40, 10, utf8_decode(invdata($row['data'])), 1, 0, 'C');
    $pdf->Ln(10);
}

foreach($con->query($query_valor) as $row) {
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(100, 10, utf8_decode('Valor Total'), 1, 0, 'C');
    $pdf->Cell(90, 10, utf8_decode($row['valor_total']), 1, 0, 'C');
    $pdf->Ln(10);
}
$pdf->Output();

?>