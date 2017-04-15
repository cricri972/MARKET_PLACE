<?php


use \W\Controller\Controller;
use \Model\ClientsModel;
use \W\Security\AuthentificationModel as AuthModel;
use \Model\ItemsModel;
use W\Security\StringUtils as Util;




/**

 * This example shows settings to use when sending via Google's Gmail servers.

 */



//SMTP needs accurate times, and the PHP time zone MUST be set

//This should be done in your php.ini, but this is how to do it if you don't have access to that

namespace Controller;

use \W\Controller\Controller;


class SendMailController extends Controller{

    


public function SendMailPsw(){

	 	$clientsModel = new ClientsModel();
        // On instancie la classe ClientsModel;

        $clients = $clientsModel->findAll();
        // Stock tout les clients dans la variable $clients

var_dump($clients);

$this->show('clients/updatePassword');

public function SendMail(){



   // $message = '
   //                  <html>
   //                  <head>
   //                  <title>Nouveau mot de passe</title>
   //                  </head>
   //                  <body>
   //                  <p>Veuillez cliquer sur le lien ci-dessous pour générer un nouveau mot de passe</p>
   //                  <a href="'.$_SERVER['SERVER_NAME'].substr($_SERVER['REQUEST_URI'], 0, strrpos($_SERVER['REQUEST_URI'], '/')).'/password.php?email='.$user['email'].'&token='.$user['token'].'">Nouveau mot de passe</a>
   //                  </body>
   //                  </html>
   //                  ';
	

	
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


			if($post['email'] !== $client['email']){
				$error[] = 'Email non reconnu dans notre base';
			}
            
            if(empty($client['token'])){

			if($post['email'] !== $clients['email']){
				$error[] = 'Email non reconnu dans notre base';
			}
            
            if(empty($clients['token'])){

                 $error[] = 'erreur sur le token';
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
					$mail->msgHTML($contenu);

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

}

