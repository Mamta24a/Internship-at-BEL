<?php

require_once('tcpdf_include.php');


// Extend the TCPDF class to create custom Header and Footer
class MYPDF extends TCPDF {

	//Page header
	public function Header() {
		// Logo
		$image_file = K_PATH_IMAGES.'logo_example.jpg';
		$this->Image($image_file, 10, 10, 15, '', 'JPG', '', 'T', false, 300, '', false, false, 0, false, false, false);
		// Title
		$this->Cell(0, 15, '<< TCPDF Example 003 >>', 0, false, 'C', 0, '', 0, false, 'M', 'M');
	}

	// Page footer
	public function Footer() {
		// Position at 15 mm from bottom
		$this->SetY(-15);
		// Page number
		$this->MultiCell(200, 100, 'नौसेना तंत्र (एस व सी एस), भारत इलेक्ट्रॉनिक्स लिमिटेड,
जालहल्ली पोस्ट, बेंगलूरु – 560 013
NAVAL SYSTEMS (S & CS) - BHARAT ELECTRONICS LIMITED, BANGALORE POST – 560 013
दूरभाष संख्या / TELEPHONE NO. 080-22195929', 0,1, false, '', 0, '', 0, false, 'T', 'M');
	}
}

// create new PDF document
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

//Close and output PDF document
$pdf->Output('example_003.pdf', 'I');