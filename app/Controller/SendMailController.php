<?php

/**

 * This example shows settings to use when sending via Google's Gmail servers.

 */

//SMTP needs accurate times, and the PHP time zone MUST be set

//This should be done in your php.ini, but this is how to do it if you don't have access to that

namespace Controller;

use \W\Controller\Controller;
use \Model\ClientsModel;
use \W\Model\UsersModel;
use \W\Model\Model;


class SendMailController extends Controller{

	public function SendMailPsw(){

		$emailTable = new ClientsModel();
		$emailPassword = $emailTable->findAllEmail();
		// 	$toto = $emailTable;
		// // debug($emailPassword);
		// // debug($toto);

		// $user['token'] = 31315151131;
		// $user['email'] = 'hjurin@gmail.com';

		// $message = ' <html>
  //                   <head>
  //                   <title>Nouveau mot de passe</title>
  //                  </head>
  //                  <body>
  //                   <p>Veuillez cliquer sur le lien ci-dessous pour générer un nouveau mot de passe</p>
  //                   <a href="http://localhost/market_place/public/MailPswReturn">Nouveau mot de passe</a> 
  //                   </body>
  //                  </html>';
	
		$error = [];
        $post = [];

    	if(!empty($_POST))
		{
			
			foreach($_POST as $key => $value){
				$post[$key] = trim(strip_tags($value));
			}

			
			if(!filter_var($post['email'], FILTER_VALIDATE_EMAIL)){
				$error[] = 'L\'adresse email est invalide';
			}
	            
            // if(strlen($post['content'] <10)){
            //      $error[] = 'L\'article doit avoir au moins 10 caractères';
            // }
			// if(strlen($post['sujet'] <5)){
   //               $error[] = 'Le sujet doit avoir au moins 5 caractères';
   //          }
			// 	if(empty($post['lastname'])){
   //               $error[] = 'Mettre votre nom';
   //          }
        
			if(count($error) !== 0){
                $formError = true;
				echo implode('br',$error);

				
			}else{
  

					//debug($post['email']);
				//debug($emailPassword);
			if($emailTable->emailExists($post['email'])){
				
				$emailPassword = $emailTable->findAllEmail();

				foreach ($emailPassword as $value) {
					if($post['email'] === $value['email']){

						$result[] = $value;
						//debug($result[0]['token']);
							$token = $result[0]['token'];		
						//var_dump($result);
					}
				}
				//$emailPassword = $emailTable->find($id);
				// $emailPassword['token'] = $token;
				//debug($emailPassword);
				//echo 'toto';

			}
			$reset = 'http://127.0.0.1/market_place/public/MailPswNew?token=';
       		$message = 'Merci de cliquer sur ce  <a href="'.$reset.$token.'">lien</a> afin de pouvoir changer votre mot de passe ';

					date_default_timezone_set('Etc/UTC');

					//Create a new PHPMailer instance

					$mail = new \PHPMailer;

					//Tell PHPMailer to use SMTP

					$mail->isSMTP();

					//Enable SMTP debugging

					// 0 = off (for production use)

					// 1 = client messages

					// 2 = client and server messages

					$mail->SMTPDebug = 0;

					//Ask for HTML-friendly debug output

					$mail->Debugoutput = 'html';

					//Set the hostname of the mail server

					$mail->Host = 'smtp.gmail.com';

					// use

					// $mail->Host = gethostbyname('smtp.gmail.com');

					// if your network does not support SMTP over IPv6

					//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission

					$mail->Port = 587;

					//Set the encryption system to use - ssl (deprecated) or tls

					$mail->SMTPSecure = 'tls';

					//Whether to use SMTP authentication

					$mail->SMTPAuth = true;

					//Username to use for SMTP authentication - use full email address for gmail

					$mail->Username = "hervejurin972@gmail.com";

					//Password to use for SMTP authentication

					$mail->Password = "Jrvjrv972";

					//Set who the message is to be sent from

					$mail->setFrom('hervejurin972@gmail.com', 'Serveur market');

					//Set an alternative reply-to address

					//$mail->addReplyTo('replyto@example.com', 'First Last');

					//Set who the message is to be sent to

					$mail->addAddress($post['email']);

					//Set the subject line

					$mail->Subject = 'Password reset';

					//$mail->Body     = $post['content'];

					//Read an HTML message body from an external file, convert referenced images to embedded,

					//convert HTML into a basic plain-text alternative body

					//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));

					$mail->msgHTML($message);

					//Replace the plain text body with one created manually

					//$mail->AltBody = 'This is a plain-text message body';

					//Attach an image file

					//$mail->addAttachment('images/phpmailer_mini.png');

					//send the message, check for errors

					if (!$mail->send()) {

						echo "Mailer Error: " . $mail->ErrorInfo;

					} else {

						echo "Message sent!";
					}
					
				}
					
			}
			$this->show('clients/updatePassword');
	}


	public function resetPassword(){

		$this->show('clients/returnPassword');

	}


	public function newPassword(){
		$errors = [];
		$post = [];
		echo 'totot';
		if(isset($_GET['token']) && !empty($_GET['token'])){
			$token = $_GET['token'];
			//debug($token);
			$tokenTable = new ClientsModel();
			$returnToken = $tokenTable->findtoken($token);
			//debug($returnToken);
			if($tokenTable->findtoken($token)){
				if(!empty($_POST)){
					//debug($_POST);
					foreach($_POST as $key => $value){
                        $post[$key] = trim(strip_tags($value));
                    }

                   if(strlen($post['new']) < 8 || strlen($post['new']) > 16)
            		{
						$errors[] = "Votre mot de passe doit compter de 8 à 16 caractères";
					}

					if(count($errors) === 0){
						    $id = $returnToken['email'];

                        	$data = [
                            'password' => password_hash($post['new'], PASSWORD_DEFAULT),
                        	];
							//debug($data);
                        	$newPassword = new ClientsModel();
                        	$passwordToUpdate = $newPassword->findmail($id);

                        	//debug($passwordToUpdate);
                        	if(!$newPassword->updatePassword($data, $id)){
                        		$result = 'mot de passe changer';
                        		echo $result;
                        	}else{
                        		$result = $errors;
                        		echo $result;

                        	}
					}
				}
			}


		}
			$this->show('clients/returnPassword');
	}

  	//SenMail pour test ne pas modifier faire une copie 
	public function SendMail(){

	
		$error = [];
        $post = [];

    	if(!empty($_POST))
		{
			
			foreach($_POST as $key => $value){
				$post[$key] = trim(strip_tags($value));
			}

			
			if(!filter_var($post['email'], FILTER_VALIDATE_EMAIL)){
				$error[] = 'L\'adresse email est invalide';
			}
            
            if(strlen($post['content'] <10)){
                 $error[] = 'L\'article doit avoir au moins 10 caractères';
            }
			if(strlen($post['sujet'] <5)){
                 $error[] = 'Le sujet doit avoir au moins 5 caractères';
            }
				if(empty($post['lastname'])){
                 $error[] = 'Mettre votre nom';
            }
	        
			if(count($error) === 0){
                $formError = true;
				echo implode('br',$error);
			}else{
  
					date_default_timezone_set('Etc/UTC');

					//Create a new PHPMailer instance

					$mail = new \PHPMailer;

					//Tell PHPMailer to use SMTP

					$mail->isSMTP();

					//Enable SMTP debugging

					// 0 = off (for production use)

					// 1 = client messages

					// 2 = client and server messages

					$mail->SMTPDebug = 0;

					//Ask for HTML-friendly debug output

					$mail->Debugoutput = 'html';

					//Set the hostname of the mail server

					$mail->Host = 'smtp.gmail.com';

					// use

					// $mail->Host = gethostbyname('smtp.gmail.com');

					// if your network does not support SMTP over IPv6

					//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission

					$mail->Port = 587;

					//Set the encryption system to use - ssl (deprecated) or tls

					$mail->SMTPSecure = 'tls';

					//Whether to use SMTP authentication

					$mail->SMTPAuth = true;

					//Username to use for SMTP authentication - use full email address for gmail

					$mail->Username = "hervejurin972@gmail.com";

					//Password to use for SMTP authentication

					$mail->Password = "Jrvjrv972";

					//Set who the message is to be sent from

					$mail->setFrom('hervejurin972@gmail.com', 'Serveur market');

					//Set an alternative reply-to address

					//$mail->addReplyTo('replyto@example.com', 'First Last');

					//Set who the message is to be sent to

					$mail->addAddress($post['email'], $post['lastname']);

					//Set the subject line

					$mail->Subject = $post['sujet'];

					//$mail->Body     = $post['content'];

					//Read an HTML message body from an external file, convert referenced images to embedded,

					//convert HTML into a basic plain-text alternative body

					//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
					$mail->msgHTML($post['content']);

					//Replace the plain text body with one created manually

					//$mail->AltBody = 'This is a plain-text message body';

					//Attach an image file

					//$mail->addAttachment('images/phpmailer_mini.png');

					//send the message, check for errors

					if (!$mail->send()) {

						echo "Mailer Error: " . $mail->ErrorInfo;

					} else {

						echo "Message sent!";
					}
					
				}
					
			}
			$this->show('item/MailItem');
	}

}



