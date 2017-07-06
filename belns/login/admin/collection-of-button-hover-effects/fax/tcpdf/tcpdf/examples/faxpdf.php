<?php

if (isset($_POST['submit'])){
$too=$_POST['too'];
$fax1=$_POST['fax1'];
$copy=$_POST['copy'];
$fax2=$_POST['fax2'];
$frm=$_POST['frm'];
$fax3=$_POST['fax3'];
$date=date('d-m-20y');
$sub=$_POST['sub'];
$ref=$_POST['ref'];
$body=$_POST['body'];
$regards=$_POST['regards'];
$name=$_POST['name'];

// Include the main TCPDF library (search for installation path).
require_once('tcpdf_include.php');



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



// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);

$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 008', PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));


$pdf->SetPrintHeader(false);

$pdf->SetPrintFooter(false);


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

// set font
//$pdf->SetFont('freeserif', '', 12);

// add a page
$pdf->AddPage();
$total =$pdf->getAliasNbPages();
// get esternal file content
//$utf8text = file_get_contents('tcpdf/tcpdf/examples/data/utf8test.txt', false);

// set color for text
//$pdf->SetTextColor(0, 63, 127);

//Write($h, $txt, $link='', $fill=0, $align='', $ln=false, $stretch=0, $firstline=false, $firstblock=false, $maxh=0)

// write the text
$pdf->SetFont('freeserif', 'U', 18);
$pdf->Write(1,"नौसेना तंत्र (एस व सी एस) /NAVAL SYSTEMS (S & CS)", '', 0, 'C', true, 0, false, false, 100);



$pdf->SetFont('freeserif', '', 10);

$tbl = <<<EOD
<table cellspacing="10" cellpadding="1" border="" padding="0px">
    <tr>
        <td rowspan=""><img src="Captxzure.png" width="520" height="160" padding="20px"></td>
        <td><img src="untimtled.png" width="400" height="110" ></td>
        <td style="font-size:17px">Bharat Electronics Ltd.
Jalahalli Post <br>
Bengaluru - 560013</td>
    </tr>
    </table>
EOD;

$pdf->writeHTML($tbl, true, false, false, false, '');


$pdf->SetFont('freeserif', 'U', 15);
$pdf->Write(10,"फैक्स संदेश / FAX MESSAGE", '', 0, 'C', true, 0, false, false, 100);


$pdf->SetFont('freeserif', '', 10);
$tbl = <<<EOD
<table cellspacing="0" cellpadding="5" border="1">
    <tr p>
        <td rowspan="" >सेवामें/TO</td>
        <td>{$too}</td>
		<td rowspan="3" align="">fax</td>
		<td>{$fax1}</td>
		
    </tr>
    <tr>
        <td rowspan="">COPY/जानकारी</td>
        <td>{$copy}</td>
		<td>{$fax2}</td>
    </tr>
	 <tr>
        <td rowspan="">प्रेषक/FROM</td>
        <td>{$frm}</td>
		<td>{$fax3}</td>
    </tr>
    <tr>
        <td rowspan="">संदर्भ/REF</td>
        <td>{$ref}</td>
		<td><img src="Capvjture_2.png" width="34">DATE</td>
		<td>{$date}</td>
    </tr>
	</table>
EOD;

$pdf->writeHTML($tbl, true, false, false, false, '');
$pdf->Cell(90,7,"पृष्ट की कुल संख्या /TOTAL NO. OF PAGES : ",1,0,'C');
$pdf->Cell(0,7,$pdf->getAliasNbPages(),1,1,'C');

$pdf->SetFont("freeserif","","12");
//$pdf->Cell(10,10,"SUB:",0,0);
//$pdf->Cell(10,10,"संदर्भ/ REF:",0,0);
//$pdf->Image('Capxdc ture.png',14,142,14,6);
//$pdf->Write(10,"           SUB: {$sub}", '', 0, 'L', true, 0, false, false, 100);
//$pdf->Write(2,"पृष्ट की कुल संख्या /TOTAL NO. OF PAGES : " .$pdf->getAliasNbPages(), '', 0, 'L', true, 0, false, false, 100);


$pdf->Write(10,"विषय/SUB: {$sub}", '', 0, 'L', true, 0, false, false, 100);
$pdf->Write(10,"संदर्भ/REF: {$ref}", '', 0, 'L', true, 0, false, false, 100);


$pdf->Write(10,"{$body}", '', 0, '', true, 0, false, false, 1000);
$pdf->Write(10,"
", '', 0, 'L', true, 0, false, false, 100);

//$pdf->Cell(10,10,"सादर / REGARDS,",0,0);
//$pdf->Cell(10,10,"नाम / (NAME)",0,0);
$pdf->Write(5,"{$regards}", '', 0, 'R', true, 0, false, false, 100);
$pdf->Write(5,"सादर / REGARDS", '', 0, 'R', true, 0, false, false, 100);
$pdf->Write(5,"", '', 0, 'R', true, 0, false, false, 100);
$pdf->Write(5,"{$name}", '', 0, 'R', true, 0, false, false, 100);
$pdf->Write(5,"नाम / (NAME)", '', 0, 'R', true, 0, false, false, 100);


//$pdf->MultiCell(130,0,"नौसेना तंत्र (एस व सी एस), भारत इलेक्ट्रॉनिक्स लिमिटेड,
//जालहल्ली पोस्ट, बेंगलूरु – 560 013
//NAVAL SYSTEMS (S & CS) - BHARAT ELECTRONICS LIMITED, BANGALORE POST – 560 013
//दूरभाष संख्या / TELEPHONE NO. 080-22195929",1,1);
//$pdf->MultiCell(130, 150, '<< TCPDF Example 003 >>', 1,0, false, '', 0, '', 0, false, 'M', 'M');

// ---------------------------------------------------------
//$pdf->Cell(130,1, '***********end of fax*********', 1,0, false, '', 1, '', 0, false, 'T', 'M');
$pdf->Image('Capture.PNG',14,247,180,25);
	
//Close and output PDF document

$pdf->Output($sub.'.pdf', 'I');
//$pdf->Output('C:\xampp\htdocs\belns'.$sub.'.pdf', "F");

//============================================================+
// END OF FILE
//============================================================+
}?>