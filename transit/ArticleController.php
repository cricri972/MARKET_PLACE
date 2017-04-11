<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\ArticlesModel;
class ArticleController extends Controller
{
	/* Lister les articles */
	public function enumArticle()
	{
		//Instanciation du model appelant findAll

		$articlesModel = new ArticlesModel(); // instanciation 
		$articles = $articlesModel -> findAll(); //resultat requete (sous entendu select * + fetchAll) envoyé dans un tableau
        
        //echo '<br>';
		//var_dump($articlesModel);

		$params = ['articles' => $articles];

        //echo '<br>';
		//var_dump($params);
        //echo '<br>';
		//var_dump($articles);
		$this->show('article/enum_Article', $params); // template a afficher pour resultats
	}

	/* afficher détail d'un article */

	public function detailArticle($id)
	{

        echo $id;
        echo "<br>";
		$articlesModel = new ArticlesModel(); // instanciation 
		$article = $articlesModel -> find($id);

		
        var_dump($article);
        echo'<br>';
        echo $article['id'];
        echo'<br>';

        echo $article['content'];
        
        $details = ['articles' => $article];
        echo '<br>';
        var_dump($details);
        
        echo $details['title'];
        echo'<br>';
        echo $details['content'];
        

		$this->show('article/detailArticle', $details);
	}

	/* Ajouter un article*/
	public function createArticle()
	{
//************************************************************************
		$errors = [];
		$post = [];

		if(!empty($_POST)){

			$post = array_map('trim', array_map('strip_tags', $_POST));

			if((strlen($post['title']) < 1) && (strlen($post['title']) > 40)) {
				$errors[] = 'Le titre doit comporter  entre 1 et 40 caractères ';
			}

			if((strlen($post['content']) < 10) && (strlen($post['content']) > 200)) {
				$errors[] = 'Le contenu de l\'article doit comporter  entre 10 et 200 caractères ';
			}

			if(count($errors) === 0){
				$result = '<p style="color:green">Les informations saisies sont correctes !</p>';
			// ecriture dans la base
				

				$articlesModel = new ArticlesModel();


				$articlesModel->insert($post);

			}
			else { // Si j'ai des erreurs
				$result = '<p style="color:red">'.implode('<br>', $errors).'</p>';
			}

			echo $result;
		
//*************************************************************************
	}
		$this->show('article/createArticle');
	}

   
       public function newMail()
    {   
        
        if(!empty($_POST)){  // si la super globale $_POST n'est pas vide 
	
        foreach($_POST as $key => $value){ // pour chaque valeur liée à une clé
		$post[$key] = trim(strip_tags($value));// on nettoie les variables de tout html ou php "insécurisés
	       }

	/*if(strlen($post['firstname']) < 2  || strlen($post['firstname']) > 20){
		$errors[] = 'Votre prénom doit comporter entre 2 et 20 caractères';
	}*/

    /*if(strlen($post['lastname']) < 2  || strlen($post['lastname']) > 20){
		$errors[] = 'Votre nom doit comporter entre 2 et 20 caractères';
	}*/

    if(!filter_var($post['mail'], FILTER_VALIDATE_EMAIL)) {
		$errors[] = "l'email du destinataire n'est pas conforme";
	}
        
    if(strlen($post['object']) < 5  || strlen($post['object']) > 20){
		$errors[] = 'L\'objet de votre message doit comporter entre 5 et 20 caractères';
	}
    
	if(strlen($post['content']) < 10 || strlen($post['content']) > 200){
		$errors[] = 'Votre message doit comporter au moins 10 et au plus 200 caractères';
	}

	
	
	if(count($errors) === 0){
        
            
        
        /**
         * This example shows settings to use when sending via Google's Gmail servers.
         */

        //SMTP needs accurate times, and the PHP time zone MUST be set
        //This should be done in your php.ini, but this is how to do it if you don't have access to that
        
            //date_default_timezone_set('Etc/UTC');

            //require '../vendor/phpmailer/phpmailer/PHPMailerAutoload.php';

            
        //Create a new PHPMailer instance
        $mail = new PHPMailer;// peut-etre verifier le chemin

        //Tell PHPMailer to use SMTP
        $mail->isSMTP();

        //Enable SMTP debugging
        // 0 = off (for production use)
        // 1 = client messages
        // 2 = client and server messages
        $mail->SMTPDebug = 2;

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
        $mail->Username = "colme972@gmail.com";

        //Password to use for SMTP authentication
        $mail->Password = "411ApH972";

        //Set who the message is to be sent from
        $mail->setFrom('colme972@gmail.com', 'First Last');

        //Set an alternative reply-to address
        $mail->addReplyTo('olc972@gmail.com', 'First Last');

        //Set who the message is to be sent to
        //$mail->addAddress('whoto@example.com', 'John Doe');
        $mail->addAddress($post['email'], $post['firstname'].' '.$post['lastname']);

        //Set the subject line
        $mail->Subject = $post['oject'];

        //Read an HTML message body from an external file, convert referenced images to embedded,
        //convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('../vendor/phpmailer/phpmailer/examples/contentsutf8.html'), dirname(__FILE__));
        $mail->msgHTML('fldnvgdfkjghhfgklfdhg lkdfhgmlqs');

        //Replace the plain text body with one created manually
        $mail->AltBody = 'This is a plain-text message body';

        //Attach an image file
        //$mail->addAttachment('../vendor/phpmailer/phpmailer/examples/images/phpmailer_mini.png');

        //send the message, check for errors
        if (!$mail->send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
        } else {
            echo "Message sent!";
        
        }
    }
    }
        $this->show('mail/newMail');
        
}
    
}
