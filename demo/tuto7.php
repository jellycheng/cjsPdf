<?php
define('FPDF_FONTPATH','./font/');//自定义字体目录
require dirname(__DIR__) . '/vendor/autoload.php';

$pdf = new FPDF();
$pdf->AddFont('Calligrapher','', 'calligra.php'); //添加支持的字体
$pdf->AddPage();
$pdf->SetFont('Calligrapher','',35);
$pdf->Cell(0,10,'Enjoy new fonts with FPDF!');


$pdf->Output('D');
?>
