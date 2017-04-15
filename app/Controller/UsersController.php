<?php 

namespace Controller;

use \W\Controller\Controller;
use \Model\UsersModel;
use \W\Security\AuthentificationModel as AuthModel;

class UsersController extends Controller{

	public function addUser(){
            $a = new UsersModel();
            $post = [];
            $errors = [];

            if(!empty($_POST)){
                foreach($_POST as $key => $value){
                    $post[$key] = trim(strip_tags($value));
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
                 $this->show('users/Add', ['result' => $result]);
                } else{
                $this->show('users/Add');
            }
    }



    public function listUser(){

    $usersModel = new UsersModel();
    // On instancie la classe ClientsModel;

    $users = $usersModel->findAll();
    // Stock tout les users dans la variable $users
        
    $this->show('users/list', ['users' =>$users]);
    }



    public function viewUser($id){
        $post = [];
        $errors = [];

        $user = new UsersModel();
        //création d'1 variable qui permet l'utilisation des fonctions de UsersModel.

        $detail = $user->find($id);
        //création d'1 variable contenant le résultat de la requête (rechercher tous les éléments selon critère ID)

        //var_dump($detail);

        //si la requête ne renvoie rien (si l'ID n'existe pas), on affichera ERREUR 404
        if(empty($detail)){
            $this->shownotfound();
        }
        	else{
        	$this->show('users/view',[
            'descriptif' => $detail,
            'result'     => (isset($result)) ? $result : null]);
        	}
	}


	public function deleteUser($id){

		$user = new UsersModel();

		//$delete = $user-> delete($id);

		if ($user-> delete($id)){
		$this->show('users/delete');
        }
	}


	public function modifyUser($id){

            $post = [];
            $errors = [];

            $user = new UsersModel();

            $detail = $user->find($id);

            if(!empty($_POST)){
                foreach($_POST as $key => $value){
                    $post[$key] = trim(strip_tags($value));
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

                if(count($errors) === 0){
                    $post['password'] = password_hash($post['password'], PASSWORD_DEFAULT);

                    $updateUsr = $user->update($post, $id);
                    if ($updateUsr){
                        $result = 'Vos modifications ont bien été transmises';
                        $this->redirectToRoute('Users_addUser');
                    }   
                }
                else {
                    $result =implode("<br>",$errors);
                }
                echo $result;
            }
                if(isset($result)){
                 $this->show('users/modify');
                } 
                else{
                $this->show('users/modify',['detail' => $detail]);
                //detail correspond à "echo $detail" dans le fichier modifier
                //$detail correspond à la variable définie en haut de cette fonction
            }
    }




	public function loginUser()
    {
        $post = [];
        $errors = [];

        $login = new UsersModel();

        if(!empty($_POST))
        {
            foreach($_POST as $key => $value)
            {
                $post[$key] = trim(strip_tags($value));
            }

            if(!filter_var($post['email'], FILTER_VALIDATE_EMAIL))
            {
                $errors[] = "Email invalide";
            }

            if(strlen($post['password']) < 8 || strlen($post['password']) > 16)
            {
                $errors[] = "Mot de passe invalide";
            }

            if(count($errors) === 0)
            {
            // La connexion est effective si la fonction retourne un ID
                $idUser = $login->isValidLoginInfo($post['email'], $post['password']);

                if($login !== 0)
                {
                    $result = 'Couple email / password OK';
                    // ou 'Couple email / password OK. ID = '.$idClient;

                    $userDatas = $login->find($idUser);
                    //variable qui récupère l'ID du user

                    // Connecte le user
                    $authModel = new AuthModel;
                    $authModel->logUserIn($userDatas);

                    // Redirection vers...
                    $this->redirectToRoute('Market_admin');
                }
                else
                {
                    $result = 'Couple email / password NOTOK';
                }
            } 
            else
            {
                $result =implode("<br>", $errors);
            }

            //var_dump($result);
        }
        
       $this->show('users/login');
        //$this->redirectToRoute('Users_loginUser');


    }


    
    public function logoutUser()
    {
        $logout = new AuthModel;
        $logout->logUserOut();

         // Redirection vers...
        $this->redirectToRoute('Users_loginUser');
    }
}