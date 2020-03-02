<?php
require_once('../../TCPDF/tcpdf.php');

$name = $_GET['a'];
$course = $_GET['b'];


// Extend the TCPDF class to create custom Header and Footer
class MYPDF extends TCPDF {
    //Page header
    public function Header() {
        // get the current page break margin
        $bMargin = $this->getBreakMargin();
        // get current auto-page-break mode
        $auto_page_break = $this->AutoPageBreak;
        // disable auto-page-break
        $this->SetAutoPageBreak(false, 0);
        // set bacground image
        $img_file = K_PATH_IMAGES.'Certificado.png';
        $this->Image($img_file, 0, 0, 300, 214, '', '', '', true, 300, '', false, false, 0);
        // restore auto-page-break status
        $this->SetAutoPageBreak($auto_page_break, $bMargin);
        // set the starting point for the page content
        $this->setPageMark();
    }
}

// create new PDF document
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);



// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(0);
$pdf->SetFooterMargin(0);



// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// ---------------------------------------------------------

// set font
$pdf->SetFont('times', '', 48);

// add a page
$pdf->AddPage('L');

// Print a text
$html = '<p style="font-family:DejaVuSans;font-size:40pt; color:#FF9500">' .$name. '</p>';
$pdf->writeHTMLCell(200, 50, 17, 70, $html, 0, 1, 0, true, '', true);


$html = '<p style="font-family:DejaVuSans;font-size:23pt;font-weight:normal ">' .$course. '.'.'</p>';
$pdf->writeHTMLCell(200, 30, 17, 135, $html, 0, 1, 0, false, '', false);




// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output('Certificado.pdf', 'I');

//============================================================+
// END OF FILE