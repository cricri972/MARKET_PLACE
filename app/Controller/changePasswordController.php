<?php
namespace Controller;

use \W\Controller\Controller;
use \Model\ClientsModel;
use \W\Security\AuthentificationModel as AuthModel;
use \Model\ItemsModel;
use \Model\ShopModel;

class changePasswordController extends Controller{

	public function passwordChange($id)
	{

		$newMdp =  false;

		if(isset($_GET['email']) && isset($_GET['token']))
		{
			$newMdp = true;

			$select = new ClientsModel();
			$mdp = $select->find($id);

			if($mdp === false){
				$this->redirectToRoute('Market_admin');
				die;
			}
				else
				{
					$email = $_GET['email'];
				}

		}
		elseif(!isset($_SESSION['user']) || empty($_SESSION['user']))
		{
			$this->redirectToRoute('Clients_loginClient');
		}

		  	$post = [];
		    $errors = [];

		    if(!empty($_POST)){
		        // nettoyage des données
		        foreach ($_POST as $key => $value)
		            $post[$key] = trim(strip_tags($value));

		        // gestion des erreurs
		        if(!$newMdp) {
		            if(empty($post['old']))
		                $errors[] = 'Le champ Ancien Mot de passe est vide.';
		            else{
		                $email = $_SESSION['user']['email'];

		                $select = new ClientsModel();
		                $pass = $select->find($email);

		               
		                    if(!password_verify($post['old'], $pass['password'])){
		                        $errors[] = 'L\'Ancien Mot de passe est invalide.';
		                    }
		                }
		            }
		        }

		        if(empty($post['new']))
		            $errors[] = 'Le champ Nouveau Mot de passe est vide.';

		        if(empty($post['confirm']))
		            $errors[] = 'Le champ Confirmation du mot de passe est vide.';
		        elseif($post['confirm'] !== $post['new'])
		            $errors[] = 'Les champs ne correspondent pas.';
		        
		        if(count($errors) === 0){
		            $datas = [
                    // colonne sql => valeur à insérer
                    'email'				=> $post['email'],
					'password'				=> $post['name'],
				                   
                ];

                $item = new ClientsModel();
				$item->update($datas, $id);
				$view = $viewItem->find($id);

				$this->show('item/viewItem',$datas);

		        }else{
		        	$errorsText = implode('<br>', $errors);
		        }

	}

}




?>