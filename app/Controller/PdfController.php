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
		$pdf->addPage('https://www.google.com');
		//$pdf->addPage('<html><p>Sagi is the best women in Martinique</p></html>');
		// $pdf->setOptions(['user-style-sheet' => realpath('assets/css/Resto_AddEvent_bootstrap.css')]);
		// $pdf->addPage('https://www.google.com');
		// if(!$pdf->send()){
		// 	var_dump('Could not create PDF: '.$pdf->getError());
		// 	die;
		$pdf->saveAs($uploadDir.'report.pdf');
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
	



