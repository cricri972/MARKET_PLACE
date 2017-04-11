<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\ClientsModel;
use \W\Security\AuthentificationModel as aut;

class ClientsController extends Controller{

	public function addClient(){
            $a = new ClientsModel();
            $post = [];
            $errors = [];

            if(!empty($_POST)){
                foreach($_POST as $key => $value){
                    $post[$key] = trim(strip_tags($value));
                }
                
                if(empty($post['pseudo'])){
                    $errors[] = 'Veuillez saisir un pseudo';
                }

                if(strlen($post['lastname']) < 2) {
					$errors[] = "Le champ Nom doit avoir au moins 2 caractères";
				}

				if(strlen($post['firstname']) < 2) {
					$errors[] = "Le champ Prénom doit avoir au moins 2 caractères";
				}
                
                if(!filter_var($post['email'], FILTER_VALIDATE_EMAIL)) {
					$errors[] = "Saisissez un email valide";
				}

                if(strlen($post['password']) < 8 || strlen($post['password']) > 16) {
					$errors[] = "Votre mot de passe doit compter de 8 à 16 caractères";
				}

                if(!is_numeric($post['phone']) || strlen($post['phone']) != 10) {
					$errors[] = "Le numéro de portable doit contenir 10 chiffres";
				}

				if(!is_numeric($post['phone_2']) || strlen($post['phone']) != 10) {
					$errors[] = "Le numéro de téléphone fixe doit contenir 10 chiffres";
				}

				if(strlen($post['address']) < 2) {
					$errors[] = "Votre adresse doit contenir au minimum 2 caractères";
				}

				if(strlen($post['city']) < 2) {
					$errors[] = "La ville doit doit contenir au minimum 2 caractères";
				}

				if(!is_numeric($post['zip_code']) || strlen($post['zip_code']) != 5) {
					$errors[] = "Le code postal doit compter 5 chiffres";
				}

                if(count($errors) === 0){
                	$post['password'] = password_hash($post['password'], PASSWORD_DEFAULT);
                    $a->insert($post);
                    $result = 'Votre demande a bien été transmise';
                } else {
                    $result =implode("<br>",$errors);
                }
                echo $result;
            }
                if(isset($result)){
                 $this->show('clients/Add', ['result' => $result]);
                } else{
                $this->show('clients/Add');
            }
    }



    public function listclient(){

    $clientsModel = new ClientsModel();
    // On instancie la classe ClientsModel;

    $clients = $clientsModel->findAll();
    // Stock tout les clients dans la variable $clients
        
    $this->show('clients/list', ['clients' =>$clients]);
    }



    public function viewclient($id){
        $post = [];
        $errors = [];

        $client = new ClientsModel();
        //création d'1 variable qui permet l'utilisation des fonctions de ClientsModel.

        $detail = $client->find($id);
        //création d'1 variable contenant le résultat de la requête (rechercher tous les éléments selon critère ID)

        //var_dump($detail);

        //si la requête ne renvoie rien (si l'ID n'existe pas), on affichera ERREUR 404
        if(empty($detail)){
            $this->shownotfound();
        }
        	else{
        	$this->show('clients/view',[
            'descriptif' => $detail,
            'result'     => (isset($result)) ? $result : null]);
        	}
	}


	public function deleteclient($id){

		$client = new ClientsModel();

		//$delete = $client-> delete($id);

		if ($client-> delete($id)){
		$this->show('clients/delete');
        }

// <script src="js/jquery-3.2.0.min.js"></script>
// <script>
// //pour signifier que le dom est prêt
// $(function(){
//     $('#submitForm').click(function(el){
//         el.preventDefault(); // On bloque l'action par défaut

//         var form_user = $('#addUser'); // On récupère le formulaire, form_user pe Toto, #addUser c'est le nom du formulaire en haut
//         $.ajax({
//             method: 'post',
//             url: 'inc/ajax_add_user.php', //va chercher le fichier dans inc (vérifs etc)
//             data: form_user.serialize(), // On récupère les données à envoyer
//             success: function(resultat){
//                 $('#result').html(resultat); // id de la div indiquant l'endroit du formulaire où on affichera le résultat.
//                 // result a été utilisé dans ajax_add_user pour afficher le succes ou l'echec; ne pas oublier le echo $result.
//                 form_user.find('input').val(''); // Permet de vider les champs du formulaire.. 
//             }
//         });
//     });
// });
// </script>
	}




	public function modifyClient($id){

            $post = [];
            $errors = [];

            $client = new ClientsModel();

            $detail = $client->find($id);

            if(!empty($_POST)){
                foreach($_POST as $key => $value){
                    $post[$key] = trim(strip_tags($value));
                }
                
                if(empty($post['pseudo'])){
                    $errors[] = 'Veuillez saisir un pseudo';
                }

                if(strlen($post['lastname']) < 2){
                    $errors[] = "Le champ Nom doit contenir au moins 2 caractères";
                }

                if(strlen($post['firstname']) < 2){
                    $errors[] = "Le champ Prénom doit contenir au moins 2 caractères";
                }
                
                if(!filter_var($post['email'], FILTER_VALIDATE_EMAIL)){
                    $errors[] = "Saisissez un email valide";
                }

                if(strlen($post['password'])<8 || strlen($post['password'])>16){
                    $errors[] = "Votre mot de passe doit contenir de 8 à 16 caractères";
                }

                if(!is_numeric($post['phone']) || strlen($post['phone']) != 10){
                    $errors[] = "Le numéro de portable doit compter 10 chiffres";
                }

                if(!is_numeric($post['phone_2']) || strlen($post['phone']) != 10){
                    $errors[] = "Le numéro de téléphone fixe doit compter 10 chiffres";
                }

                if(strlen($post['address'])<2){
                    $errors[] = "Votre adresse doit contenir au minimum 2 caractères";
                }

                if(strlen($post['city'])<2){
                    $errors[] = "La ville doit doit contenir au minimum 2 caractères";
                }

                if(!is_numeric($post['zip_code']) || strlen($post['zip_code']) != 5){
                    $errors[] = "Le code postal doit compter 5 chiffres";
                }

                if(count($errors) === 0){
                    $post['password'] = password_hash($post['password'], PASSWORD_DEFAULT);

                    $updateUsr = $client->update($post, $id);
                    if ($updateUsr){
                        $result = 'Vos modifications ont bien été transmises';
                        $this->redirectToRoute('Clients_addClient');
                    }   
                }
                else {
                    $result =implode("<br>",$errors);
                }
                echo $result;
            }
                if(isset($result)){
                 $this->show('clients/modify');
                } 
                else{
                $this->show('clients/modify',['detail' => $detail]);
                //detail correspond à "echo $detail" dans le fichier modifier
                //$detail correspond à la variable définie en haut de cette fonction
            }
    }



    public function loginClient(){
        $post = [];
        $errors = [];

        $login = new aut();

        if(!empty($_POST)){
                foreach($_POST as $key => $value){
                    $post[$key] = trim(strip_tags($value));
                }

            if(!filter_var($post['email'], FILTER_VALIDATE_EMAIL)) {
                    $errors[] = "Email invalide";
                }

                if(strlen($post['password']) < 8 || strlen($post['password']) > 16) {
                    $errors[] = "Mot de passe invalide";
                }

                if(count($errors) === 0){
                    $login->isValidLoginInfo($post['email'], $post['password']);
                    $result = 'Connexion réussie';
                } else {
                    $result =implode("<br>", $errors);
                }
                echo $result;
        }
        
        $this->show('clients/login');
}
    // // Connecte un utilisateur
    // // L'argument à passer est un tableau contenant les données utilisateur
    // // Les données seront stockées sous la clé 'user' dans $_SESSION
    // public function logUserIn($user)

    // // Déconnecte un utilisateur
    // public function logUserOut(){
    //     $logout = new ClientsModel();
    //     //création d'1 variable qui permet l'utilisation des fonctions de ClientsModel.

    //     $detail = $client->find($id);
    //     }

    // }
}

