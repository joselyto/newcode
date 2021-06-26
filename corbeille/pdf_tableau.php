<?php
//============================================================+
// File name   : example_011.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 011 for TCPDF class
//               Colored Table (very simple table)
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
 * @abstract TCPDF - Example: Colored Table
 * @author Nicola Asuni
 * @since 2008-03-04
 */

// Include the main TCPDF library (search for installation path).
require_once('TCPDF-main/tcpdf.php');

// extend TCPF with custom functions
class MYPDF extends TCPDF {

    // Load table data from file
    public function LoadData() {
        require('BDD/bdd_for_export.php');
        $select = "SELECT * FROM volontaire";
        $query = mysqli_query($conn, $select);
        return $query;
        
    }

    // Colored table
    public function ColoredTable($header,$data) {
        // Colors, line width and bold font
        $this->Ln(12);

        $this->SetFillColor(0, 0, 130);
        $this->SetTextColor(255);
        $this->SetDrawColor(0, 0, 130);
        $this->SetLineWidth(0.1);
        $this->SetFont('helvetica','',8);
        // Header
        $w = array(9,15,15,15,15,15,15,15,15,15,15,15,15);
        $num_headers = count($header);
        for($i = 0; $i < $num_headers; ++$i) {
            $this->Cell($w[$i], 7, $header[$i], 1, 0, 'C', 1);
        }
        $this->Ln();
        // Color and font restoration
        $this->SetFillColor(224, 235, 255);
        $this->SetTextColor(0);
        $this->SetFont('helvetica','',8);
        // Data
        $fill = 0;
        foreach($data as $row) {
            $this->Cell($w[0], 6, $row['id_v'], 'LR', 0, 'L', $fill);
            $this->Cell($w[1], 6, $row['nom'], 'LR', 0, 'L', $fill);
            $this->Cell($w[2], 6, $row['postnom'], 'LR', 0, 'L', $fill);
            $this->Cell($w[3], 6, $row['prenom'], 'LR', 0, 'L', $fill);
            $this->Cell($w[4], 6, $row['num_tel'], 'LR', 0, 'L', $fill);
            $this->Cell($w[5], 6, $row['sexe'], 'LR', 0, 'L', $fill);
            $this->Cell($w[6], 6, $row['date_naiss'], 'LR', 0, 'L', $fill);
            $this->Cell($w[7], 6, $row['etat_civil'], 'LR', 0, 'L', $fill);
            $this->Cell($w[8], 6, $row['num_avenue'], 'LR', 0, 'L', $fill);
            $this->Cell($w[9], 6, $row['avenue'], 'LR', 0, 'L', $fill);
            $this->Cell($w[10], 6, $row['quartier'], 'LR', 0, 'L', $fill);
            $this->Cell($w[11], 6, $row['comm_ville'], 'LR', 0, 'L', $fill);
            $this->Cell($w[12], 6, $row['ville'], 'LR', 0, 'L', $fill);
            $this->Cell($w[13], 6, $row['province'], 'LR', 0, 'L', $fill);
            
          
            $this->Ln();
            $fill=!$fill;
        }
        $this->Cell(array_sum($w), 0, '', 'T');
    }
    public function Header()
    {
        $imageFile = K_PATH_IMAGES. 'min_logo.png';
        $this->Image($imageFile, 20, 10, 30, '', 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);
        $this->Ln(5); // font name size syle
        $this->SetFont('helvetica','B',20);
        //189 est le total de la largeur de A4,hauteur,border,ligne
        $this->Cell(189,5,'MINISTERE DE LA SANTE PUBLIQUE',0,1,'C');
        $this->Ln(2);
        $this->SetFont('helvetica','B',10);
        //189 est le total de la largeur de A4,hauteur,border,ligne
        $this->Cell(189,3,'PLAN NATIONL DE LUTTE CONTRE LA DREPANOCYTOSE(PNLCD)',0,1,'C');
        $this->Cell(189,3,'______________________________________________________________________________________',0,1,'C');

        $this->Ln(2);

        }
        
}

// create new PDF document
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information

$pdf->SetTitle('PNLCD');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 011', PDF_HEADER_STRING);

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

// set font
$pdf->SetFont('helvetica', '', 12);

// add a page
$pdf->AddPage();

// column titles
$header = array('N°', 'Nom', 'Postnom', 'Prenom', 'Telephone', 'Genre', 'Date naiss', 'Etat civil', 'N° avenue', 'Avenue', 'Quartier', 'Commune', 'Ville', 'Province');

// data loading
$data = $pdf->LoadData('');

// print colored table
$pdf->ColoredTable($header, $data);

// ---------------------------------------------------------

// close and output PDF document
$pdf->Output('PNLCD.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+