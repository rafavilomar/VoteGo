<?php

include 'laPlantilla.php';

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf ->SetFillColor(232,232,232);
$pdf->SetFont('Arial', 'B', 15);
$pdf->Cell(20,10, '',0,0,'C');
$pdf->Cell(50,6,'PARTIDOS', 1, 0, 'C',1);
$pdf->Cell(50,6,'NOMBRES', 1, 0, 'C',1);
$pdf->Cell(50,6,'CARGOS', 1, 0, 'C',1);

/*
$pdf->SetFont('Arial', '', 10);

$us = cargar();
foreach ($us as $mostrar){
$pdf->Cell(38,6,$mostrar['cedula'], 1, 0, 'C');
$pdf->Cell(38,6,$mostrar['nombre'], 1, 0, 'C');
$pdf->Cell(38,6,$mostrar['apellido'], 1, 0, 'C');
$pdf->Cell(38,6,$mostrar['fechaN'], 1, 0, 'C');
*/

$pdf->Output();