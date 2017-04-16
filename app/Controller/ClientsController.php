<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\ClientsModel;
use \W\Security\AuthentificationModel as AuthModel;
use \Model\ItemsModel;
use \Model\ShopModel;
use W\Security\StringUtils as Util;

class ClientsController extends Controller
{

	public function addClient()
    {
        $a = new ClientsModel();
        $post = [];
        $errors = [];
        $result = [];

        if(!empty($_POST))
        {
            foreach($_POST as $key => $value)
            {
                $post[$key] = trim(strip_tags($value));
            }
                
            if(empty($post['pseudo']))
            {
                $errors[] = 'Veuillez saisir un pseudo';
            }

            if(strlen($post['lastname']) < 2)
            {
				$errors[] = "Le champ Nom doit avoir au moins 2 caractères";
			}

			if(strlen($post['firstname']) < 2)
            {
				$errors[] = "Le champ Prénom doit avoir au moins 2 caractères";
			}
                
            if(!filter_var($post['email'], FILTER_VALIDATE_EMAIL))
            {
				$errors[] = "Saisissez un email valide";
			}

            if(strlen($post['password']) < 8 || strlen($post['password']) > 16)
            {
				$errors[] = "Votre mot de passe doit compter de 8 à 16 caractères";
			}

            if(!is_numeric($post['phone']) || strlen($post['phone']) != 10)
            {
				$errors[] = "Le numéro de portable doit contenir 10 chiffres";
			}

			if(!is_numeric($post['phone_2']) || strlen($post['phone']) != 10)
            {
				$errors[] = "Le numéro de téléphone fixe doit contenir 10 chiffres";
			}

			if(strlen($post['address']) < 2)
            {
				$errors[] = "Votre adresse doit contenir au minimum 2 caractères";
			}

			if(strlen($post['city']) < 2)
            {
				$errors[] = "La ville doit doit contenir au minimum 2 caractères";
			}

			if(!is_numeric($post['zip_code']) || strlen($post['zip_code']) != 5)
            {
				$errors[] = "Le code postal doit compter 5 chiffres";
			}


            // S il n'y pas d'erreurs
            if(count($errors) === 0)
            {
                //$token= new Util;
                $post['password'] = password_hash($post['password'], PASSWORD_DEFAULT);
                $datas = [
                    
                    'pseudo'            => $post['pseudo'],
                    'firstname'         => $post['firstname'],
                    'lastname'          => $post['lastname'],
                    'email'             => $post['email'],
                    'password'          => $post['password'],
                    'phone'             => $post['phone'],
                    'phone_2'           => $post['phone_2'],
                    'address'           => $post['address'],
                    'city'              => $post['city'],
                    'zip_code'          => $post['zip_code'],
                    'token'             => Util::randomString(),
                ];

                $a = new ClientsModel();
               
                $a->insert($datas);
                $result = 'Votre demande a bien été transmise';
                
                $this->redirectToRoute('Market_accueilSlider');
            }
            else
            {
                $result = implode("<br>",$errors);
            }

            
        } // endif(!empty($_POST))


        $this->show('clients/Add', ['result' => $result]);
        
        //$this->redirectToRoute('Market_accueilSlider');
    }




    public function listclient()
    {

        $clientsModel = new ClientsModel();
        // On instancie la classe ClientsModel;

        $clients = $clientsModel->findAll();
        // Stock tout les clients dans la variable $clients
            
        $this->show('clients/list', ['clients' =>$clients]);
    }



    public function viewclient($id)
    {
        $post = [];
        $errors = [];
        $result = [];

        $client = new ClientsModel();
        //création d'1 variable qui permet l'utilisation des fonctions de ClientsModel.

        $detail = $client->find($id);
        //création d'1 variable contenant le résultat de la requête (rechercher tous les éléments selon critère ID)

        //var_dump($detail);

        //si la requête ne renvoie rien (si l'ID n'existe pas), on affichera ERREUR 404
        if(empty($detail))
        {
            $this->shownotfound();
        }
        else
        {
        	$this->show('clients/view',[
                'descriptif' => $detail,
                'result'     => $result
            ]);
        }
	}


	public function deleteclient($id)
    {
        $client = new ClientsModel();
        //$delete = $client-> delete($id);

		if ($client->delete($id))
        {
		  $this->show('clients/delete');
        }
	}



	public function modifyClient($id)
    {
        $post = [];
        $errors = [];
        
        $client = new ClientsModel();

        $detail = $client->find($id);

        if(!empty($_POST))
        {
            foreach($_POST as $key => $value)
            {
                $post[$key] = trim(strip_tags($value));
            }
                
            if(empty($post['pseudo']))
            {
                $errors[] = 'Veuillez saisir un pseudo';
            }

            if(strlen($post['lastname']) < 2)
            {
                $errors[] = "Le champ Nom doit contenir au moins 2 caractères";
            }

            if(strlen($post['firstname']) < 2)
            {
                $errors[] = "Le champ Prénom doit contenir au moins 2 caractères";
            }
                
            if(!filter_var($post['email'], FILTER_VALIDATE_EMAIL))
            {
                $errors[] = "Saisissez un email valide";
            }

            if(strlen($post['password'])<8 || strlen($post['password'])>16)
            {
                $errors[] = "Votre mot de passe doit contenir de 8 à 16 caractères";
            }

            if(!is_numeric($post['phone']) || strlen($post['phone']) != 10)
            {
                $errors[] = "Le numéro de portable doit compter 10 chiffres";
            }

            if(!is_numeric($post['phone_2']) || strlen($post['phone']) != 10)
            {
                $errors[] = "Le numéro de téléphone fixe doit compter 10 chiffres";
            }

            if(strlen($post['address'])<2)
            {
                $errors[] = "Votre adresse doit contenir au minimum 2 caractères";
            }

            if(strlen($post['city'])<2)
            {
                $errors[] = "La ville doit doit contenir au minimum 2 caractères";
            }

            if(!is_numeric($post['zip_code']) || strlen($post['zip_code']) != 5)
            {
                $errors[] = "Le code postal doit compter 5 chiffres";
            }

            // Il n'y a pas d'erreurs
            if(count($errors) === 0)
            {
                $post['password'] = password_hash($post['password'], PASSWORD_DEFAULT);
                $updateUsr = $client->update($post, $id);

                if ($updateUsr)
                {
                    $result = 'Vos modifications ont bien été transmises';
                    $this->redirectToRoute('Clients_addClient');
                }   
            }
            else
            {
                $result =implode("<br>",$errors);
            }

        } // endif(!empty($_POST))


        $this->show('clients/modify',['detail' => $detail]);
        //detail correspond à "echo $detail" dans le fichier modifier
        //$detail correspond à la variable définie en haut de cette fonction
    }

public function modifyClientByAdmin($id)
    {
        $post = [];
        $errors = [];
        
        $client = new ClientsModel();

        $detail = $client->find($id);

        if(!empty($_POST))
        {
            foreach($_POST as $key => $value)
            {
                $post[$key] = trim(strip_tags($value));
            }
                
            if(empty($post['pseudo']))
            {
                $errors[] = 'Veuillez saisir un pseudo';
            }

            if(strlen($post['lastname']) < 2)
            {
                $errors[] = "Le champ Nom doit contenir au moins 2 caractères";
            }

            if(strlen($post['firstname']) < 2)
            {
                $errors[] = "Le champ Prénom doit contenir au moins 2 caractères";
            }
                
            if(!filter_var($post['email'], FILTER_VALIDATE_EMAIL))
            {
                $errors[] = "Saisissez un email valide";
            }

            if(strlen($post['password'])<8 || strlen($post['password'])>16)
            {
                $errors[] = "Votre mot de passe doit contenir de 8 à 16 caractères";
            }

            if(!is_numeric($post['phone']) || strlen($post['phone']) != 10)
            {
                $errors[] = "Le numéro de portable doit compter 10 chiffres";
            }

            if(!is_numeric($post['phone_2']) || strlen($post['phone']) != 10)
            {
                $errors[] = "Le numéro de téléphone fixe doit compter 10 chiffres";
            }

            if(strlen($post['address'])<2)
            {
                $errors[] = "Votre adresse doit contenir au minimum 2 caractères";
            }

            if(strlen($post['city'])<2)
            {
                $errors[] = "La ville doit doit contenir au minimum 2 caractères";
            }

            if(!is_numeric($post['zip_code']) || strlen($post['zip_code']) != 5)
            {
                $errors[] = "Le code postal doit compter 5 chiffres";
            }

            // Il n'y a pas d'erreurs
            if(count($errors) === 0)
            {
                $post['password'] = password_hash($post['password'], PASSWORD_DEFAULT);
                $updateUsr = $client->update($post, $id);

                if ($updateUsr)
                {
                    $result = 'Vos modifications ont bien été transmises';
                    $this->redirectToRoute('Clients_addClient');
                }   
            }
            else
            {
                $result =implode("<br>",$errors);
            }

        } // endif(!empty($_POST))


        $this->show('clients/modifyByAdmin',['detail' => $detail]);
        //detail correspond à "echo $detail" dans le fichier modifier
        //$detail correspond à la variable définie en haut de cette fonction
    }


    public function loginClient()
    {
        $post = [];
        $errors = [];

        $login = new ClientsModel();

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
                $idClient = $login->isValidLoginInfo($post['email'], $post['password']);

                if($login !== 0)
                {
                    $result = 'Couple email / password OK';
                    // ou 'Couple email / password OK. ID = '.$idClient;

                    $clientDatas = $login->find($idClient);
                    //variable qui récupère l'ID du client

                    // Connecte le client
                    $authModel = new AuthModel;
                    $authModel->logUserIn($clientDatas);

                    // Redirection vers...
                    $this->redirectToRoute('Market_accueilSlider');
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

            // var_dump($result);
        }
        
        $this->show('clients/login');
    }


    
    public function logoutClient()
    {
        $logout = new AuthModel;
        $logout->logUserOut();

         // Redirection vers...
        $this->redirectToRoute('Market_accueilSlider');
    }
            
    

    public function searchItemClient() {

        $itemsModel = new ItemsModel();
        if(!empty($_POST)){
            foreach($_POST as $key => $value){
                $post[$key] = trim(strip_tags($value));
            }
        }

        $searchDatas = [
            'name' => $post['recherche'],
        ];
        $items = $itemsModel->search($searchDatas);

         $this->show('clients/searchItem', ['items' => $items]);
    }



  public function viewItemClient($id)
    {
    // On instancie le model qui permet d'effectuer un viewArticle
        
            $viewItem = new ItemsModel();
            
            $view = $viewItem->find($id); 

            // $prixttc = ($view['price_ht'] * ($view['taxes']/100));
            // var_dump($prixttc);

            $params = [
                'view' => $view
            ];
        $this->show('clients/viewItemClient', $params);
      
    }


    public function viewShopClient($id)
    {
    }

    public function updatePassword()
    {
        $this->show('clients/updatePassword');
    }

}
