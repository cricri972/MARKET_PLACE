<?php

namespace Controller;

use \W\Controller\Controller;
use mikehaertl\wkhtmlto\Pdf;

class PdfController extends Controller
{

	public function HtmlToPdf() {
		$pdf = new Pdf([
				'commandOptions' => [
					'escapeArgs' => false,
					'procOptions' => [
						//'bypass_shell' 	=> true, // This will bypass the cmd.exe which seems to be recommended on Windows
						'suppress_errors'=> true, // Also worth a try if you get unexplainable errors
					],
				],
			]);
		//$pdf->addPage('<p>Hello World</p>');
		$pdf->addPage('https://www.google.com');
		if(!$pdf->send()){
			var_dump('Could not create PDF: '.$pdf->getError());
			die;
		}
	}

}

