<?php
require("fpdf.php");

class myPDF extends FPDF{
    function header(){
        $this->Image('vendors/images/min.png');
        $this->SetFont('Arial','B',14);
        $this->Cell(276,5,'MINISTERE DE LA SANTE PUBLIQUE',0,0,'C');
        $this->Ln();
        $this->SetFont('Time','',12);
        $this->Cell(276,10,'Adresse du minitere doit etre ici pour rendre le truc bon',0,0,'C');
        $this->Ln(20);
    }
    function footer(){
        $this->SetY(-15);
        $this->SetFont('Arial','',8);
        $this->Cell(0,10,'Page '.$this->PageNo.'/{nb}',0,0,'C');
    }
}
$pdf = new myPDF();
$pdf->AliasNbPages();
$pdf->AddPage('L','A4',0);
$pdf->Output();

?>  