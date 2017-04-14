<?php

namespace Controller;

use \W\Controller\Controller;
use mikehaertl\wkhtmlto\Pdf;

class PdfController extends Controller
{

	public function HtmlToPdf() {

$uploadDir = $_SERVER['DOCUMENT_ROOT'].$_SERVER['W_BASE'].'/assets/upload/';

		$pdf = new Pdf([
				//'binary' => 'C:\Program Files\wkhtmltopdf\bin',
				'commandOptions' => [

					'escapeArgs' => false,
					'procOptions' => [
						//'bypass_shell' 	=> true, // This will bypass the cmd.exe which seems to be recommended on Windows
						'suppress_errors'=> true, // Also worth a try if you get unexplainable errors
					],
				],
			]);

		// $pdf = new Pdf();
		$pdf->addPage('https://github.com/mikehaertl/phpwkhtmltopdf/issues/121');
		//$pdf->addPage('<html><p>Sagi is the best women in Martinique</p></html>');
		
		// $pdf->addPage('https://www.google.com');
		// if(!$pdf->send()){
		// 	var_dump('Could not create PDF: '.$pdf->getError());
		// 	die;
		//$pdf->saveAs('/market_place/public/assets/report.pdf');
		// $pdf->saveAs('/path/to/report.pdf');
 	// 	 if (!$pdf->saveAs('https://www.google.pdf'))
 	// 	  {
  //   	var_dump($pdf->getError());
		// }

		if (!$pdf->send()) {
    		echo $pdf->getError();
		// }

		// $outFile = $this->getOutFile();
  //       $binary = $this->getBinary();


		}
	}
}
	



