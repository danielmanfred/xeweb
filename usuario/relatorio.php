<?php
require('../inc/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(180,12, utf8_decode('Relatório de usuários'),1,1,'C');

$pdf->SetFont('Arial','B',12);
$pdf->Cell(130,8, utf8_decode('Nome'),1,0,'C');
$pdf->Cell(50,8, utf8_decode('Sexo'),1,1,'C');


include '../inc/conector.php';

$sql = 'SELECT * FROM usuario';
$resultado = mysqli_query($conexao, $sql);

while ($linha = mysqli_fetch_assoc($resultado)) {
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(130,8, $linha['nome'],1,0,'C');
    $pdf->Cell(50,8, $linha['sexo'],1,1,'C');
}

include '../inc/desconectar.php';

$pdf->Output();

?>