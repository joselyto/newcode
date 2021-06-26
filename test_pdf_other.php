<?php
session_start();
$_GET['id'];

//============================================================+
// File name   : example_001.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 001 for TCPDF class
//               Default Header and Footer
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Default Header and Footer
 * @author Nicola Asuni
 * @since 2008-03-04
 */

// Include the main TCPDF library (search for installation path).
require_once('TCPDF-main/tcpdf.php');

class PDF extends TCPDF
{

    public function Header()
    {
        $this->SetFont('helvetica','',9);
        //189 est le total de la largeur de A4,hauteur,border,ligne
        $this->Cell(28,5,'Republique Democratique du congo',0,1,'C');
        
        $this->SetFont('helvetica','B',10);
        //189 est le total de la largeur de A4,hauteur,border,ligne
        $this->Cell(30,5,'MINISTERE DE SANTE PUBLIQUE',0,1,'C');
        $this->Ln(7);
        $imageFile = K_PATH_IMAGES. 'minsec.png';
        $this->Image($imageFile, 13, 16, 30, '', 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);
        $this->Ln(20); // font name size syle
        $this->SetFont('helvetica','B',10);
        //189 est le total de la largeur de A4,hauteur,border,ligne
        $this->Cell(28,5,'SECRETARIAT GENERAL',0,1,'C');
        $this->Ln(7);
      
        $this->SetFont('helvetica','B',10);
        //189 est le total de la largeur de A4,hauteur,border,ligne
        $this->Cell(120,5,'PROGRAMME NATIONAL DE LUTTE CONTRE LA DREPANOCYTOSE(PNLCD)',0,1,'C');
        $this->SetFont('helvetica','B',15);
        $this->Ln(7);
        //189 est le total de la largeur de A4,hauteur,border,ligne
        $this->Cell(120,5,'STATUT HEMOGLOBINIQUE',0,1,'C');
        $this->SetFont('helvetica','B',7);
        $this->Ln(-1);
        $this->Cell(120,3,'_________________________________________________________',0,1,'C');
        $this->Ln(5);
        $this->SetFont('helvetica','B',10);
        $this->Cell(10,2,'Nom     :',0,1,'L');
        $this->Ln(-4);
        $this->SetFont('helvetica','',10);
        $this->Cell(50,2,$_GET['nomV'],0,1,'C');
        $this->Ln(-4);
        $this->SetFont('helvetica','B',10);
        $this->Cell(124,2,'Postnom   :',0,1,'C');
        $this->Ln(-4);
        $this->SetFont('helvetica','',10);
        $this->Cell(178,2,$_GET['postNV'],0,1,'C');
        $this->Ln(5);
        $this->SetFont('helvetica','B',10);
        $this->Cell(10,2,'Prenom  :',0,1,'L');
        $this->Ln(-4);
        $this->SetFont('helvetica','',10);
        $this->Cell(60,2,$_GET['prenomV'],0,1,'C');
        $this->Ln(5);
        $this->SetFont('helvetica','B',10);
        $this->Cell(10,2,'Date de naissance :',0,1,'L');
        $this->Ln(-4);
        $this->SetFont('helvetica','',10);
        $this->Cell(89,2,$_GET['dateV'],0,1,'C');
        $this->Ln(-4);
        $this->SetFont('helvetica','B',10);
        $this->Cell(140,2,'Sexe    :',0,1,'C');
        $this->Ln(-4);
        $this->SetFont('helvetica','',10);
        $this->Cell(178,2,$_GET['sexeV'],0,1,'C');
        $this->Ln(5);
        $this->SetFont('helvetica','B',10);
        $this->Cell(10,2,'Adresse   :',0,1,'L');
        $this->Ln(-4);
        $this->Cell(45,2,'N°',0,1,'C');
        $this->Ln(-4);
        $this->SetFont('helvetica','',10);
        $this->Cell(54,2,$_GET['numAV'],0,1,'C');
        $this->Ln(-4);
        $this->SetFont('helvetica','B',10);
        $this->Cell(89,2,'Avenue :',0,1,'C');
        $this->Ln(-4);
        $this->SetFont('helvetica','',10);
        $this->Cell(140,2,$_GET['avenueV'],0,1,'C');
        $this->Ln(5);
        $this->SetFont('helvetica','B',10);
        $this->Cell(10,2,'Commune/Village :',0,1,'L');
        $this->Ln(-4);
        $this->SetFont('helvetica','',10);
        $this->Cell(89,2,$_GET['communeV'],0,1,'C');
        $this->Ln(-4);
        $this->SetFont('helvetica','B',10);
        $this->Cell(140,2,'Ville    :',0,1,'C');
        $this->Ln(-4);
        $this->SetFont('helvetica','',10);
        $this->Cell(178,2,$_GET['villeV'],0,1,'C');
        $this->Ln(5);
        $this->SetFont('helvetica','B',10);
        $this->Cell(10,2,'Province :',0,1,'L');
        $this->Ln(-4);
        $this->SetFont('helvetica','',10);
        $this->Cell(65,2,$_GET['provinceV'],0,1,'C');
        $this->Ln(-4);
        $this->SetFont('helvetica','B',10);
        $this->Cell(140,2,'Telephone    :',0,1,'C');
        $this->Ln(-4);
        $this->SetFont('helvetica','',10);
        $this->Cell(183,2,$_GET['numTelV'],0,1,'C');
        $this->Ln(5);
        $this->SetFont('helvetica','B',10);
        $this->Cell(10,2,'Resultat :',0,1,'L');
        $this->Ln(-4);
        $this->SetFont('helvetica','',10);
        $this->Cell(50,2,$_GET['typeRes'],0,1,'C');
        $this->Ln(-4);
        $this->Ln(7);
        $this->SetFont('helvetica','B',10);
        $this->Cell(10,2,'Observation :',0,1,'L');
        $this->Ln(-4);
        $this->SetFont('helvetica','',10);
        $this->Cell(70,2,$_GET['observation'],0,1,'C');
        $this->Ln(-4);
        $this->Ln(7);
        $this->SetFont('helvetica','B',10);
        $this->Cell(10,2,'Technique Utilisée :',0,1,'L');
        $this->Ln(-4);
        $this->SetFont('helvetica','',10);
        $this->Cell(85,2,$_GET['technique'],0,1,'C');
        $this->Ln(-4);
        $this->Ln(10);
        $this->SetFont('helvetica','B',10);
        $this->Cell(10,2,'Fait à Kinshasa le :',0,1,'L');
        $this->Ln(-4);
        $this->SetFont('helvetica','',10);
        $this->Cell(107,2,date('Y-m-d H:i:s'),0,1,'C');
        $this->Ln(-4);
        $this->SetFont('helvetica','B',10);
        $this->Cell(159,2,'Par    :',0,1,'C');
        $this->Ln(-4);
        $this->SetFont('helvetica','',10);
        $this->Cell(178,2,'........',0,1,'C');
        $this->Ln(5);
        

        
    }

  
}

// create new PDF document
$pdf = new PDF('P', 'mm', 'A5', true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('TCPDF Example 001');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 001', PDF_HEADER_STRING, array(0,64,255), array(0,64,128));
$pdf->setFooterData(array(0,64,0), array(0,64,128));

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set default font subsetting mode
$pdf->setFontSubsetting(true);

// Set font
// dejavusans is a UTF-8 Unicode font, if you only need to
// print standard ASCII chars, you can use core fonts like
// helvetica or times to reduce file size.
$pdf->SetFont('dejavusans', '', 14, '', true);


// Add a page
// This method has several options, check the source code documentation for more information.
$pdf->AddPage();


// ---------------------------------------------------------

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('example_001.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+