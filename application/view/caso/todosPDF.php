<?php 

require 'pantilla.php';

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','B',8);

$pdf->Cell(40,6,'CLIENTE',1,0,'C',1);
$pdf->Cell(40,6,'DIRECCION',1,0,'C',1);
$pdf->Cell(20,6,'CIUDAD',1,0,'C',1);
$pdf->Cell(20,6,'CUENTA',1,0,'C',1);
$pdf->Cell(20,6,'ENCARGADO',1,0,'C',1);
$pdf->Cell(30,6,'TIPO',1,0,'C',1);
$pdf->Cell(25,6,'DESCRIPCION',1,1,'C',1);



$pdf->SetFont('Arial','',5);
foreach ($casoh as $c) {

	$pdf->Cell(40,6,utf8_decode($c->nombre),1,0,'C');
	$pdf->Cell(40,6,utf8_decode($c->direccion),1,0,'C');
	$pdf->Cell(20,6,utf8_decode($c->ciudad),1,0,'C');
	$pdf->Cell(20,6,utf8_decode($c->ncuenta),1,0,'C');
	$pdf->Cell(20,6,utf8_decode($c->responsable),1,0,'C');
	$pdf->Cell(30,6,utf8_decode($c->falla),1,0,'C');
	$pdf->MultiCell(25,6,utf8_decode($c->descripcion),1,1,'C');
	
}

$pdf->Output();



?>