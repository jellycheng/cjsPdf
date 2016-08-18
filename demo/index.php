<?php
require dirname(__DIR__) . '/vendor/autoload.php';
//最大确定不支持中文
class PDF extends FPDF
{
	// Page header
	public function Header()
	{
	    // Logo
	    $this->Image(__DIR__ . '/logo.png',10,6,30);
	    // Arial bold 15
	    $this->SetFont('Arial','B',15);
	    // Move to the right
	    $this->Cell(80);
	    // Title
	    $this->Cell(30,10,'用户中心接口文档',1,0,'C');
	    // Line break
	    $this->Ln(20);
	}

	// Page footer
	public function Footer()
	{
	    // Position at 1.5 cm from bottom
	    $this->SetY(-15);
	    // Arial italic 8
	    $this->SetFont('Arial','I',8);
	    // Page number
	    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
	}
}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12); //设置字体
for($i=1;$i<=40;$i++){
	$content='Printing line number 内容 ';
	//$content = mb_convert_encoding($content, 'gbk','utf-8');;
    $pdf->Cell(0,10, $content.$i,0,1);
}


$pdf->Output();
?>