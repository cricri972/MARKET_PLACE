<?php
//AddArticleController.php


namespace Controller;

use \W\Controller\Controller;
use \Model\ItemsModel;

class ItemController extends Controller
{

	public function TtcItem($id){



		$prixht = $_post['price_ht'];
		$taxes = $_post['taxes'];
        $prixttc = $prixht +   ($prixht*$taxes/100);
        return $prixttc;
       
    }
 

	public function UpdateItem($id){

		$viewItem = new ItemsModel();
		$view = $viewItem->find($id); 

		$maxSize = (1024 * 1000) * 2; // Taille maximum du fichier
        	$uploadDir = $_SERVER['DOCUMENT_ROOT'].$_SERVER['W_BASE'].'/assets/upload/'; // Répertoire d'upload
        	$mimeTypeAvailable = ['image/jpg', 'image/jpeg', 'image/pjpeg', 'image/png', 'image/gif'];

	        $errors = [];
	        $post = [];
	        $displayForm = true;


		if(!empty($_POST))
		{
			
			foreach($_POST as $key => $value){
				$post[$key] = trim(strip_tags($value));
			}
			//gestion de la reference
			if(!strlen($post['ref'] < 3)){
				$errors[] = 'La reference doit faire au moins 3 caractères';
			}

			//gestion de la du nom de l'article
			if(!strlen($post['name'] <2)){
				$errors[] = 'Le nom du titre doit avoir au moins 10 caractères';
			}

			//gestion de la description
			if(!strlen($post['description'] <10)){
				$errors[] = 'Le nom de l\'article doit avoir au moins 10 caractères';
			}

			//gestion du prix ht
			if(!is_numeric($post['price_ht'])){
				$errors[] = 'Le montant est incorrect';
			}

			//gestion de la tva
			if(!empty($post['tva'])){
				$errors[] = 'Lmerci de choisir une tva';
			}

			//gestion de la remise
			if(!is_numeric($post['discount'])){
				$errors[] = 'Le montant de la remise en incorrect entre 0 et 90';
			}

			//gestion de la categorie
			if(empty($post['category'])){
				$errors[] = 'merci de choisir une categorie';
			}


			//gestion du stock
			if(!is_int($post['stock']) || !($post['stock'] >= 1)){
				$errors[] = 'Le montant du incorrect';
			}

			//gestion de la photo de l'article
			if(isset($_FILES['picture']) && $_FILES['picture']['error'] === 0){

                $finfo = new \finfo();
                $mimeType = $finfo->file($_FILES['picture']['tmp_name'], FILEINFO_MIME_TYPE);

                $extension = pathinfo($_FILES['picture']['name'], PATHINFO_EXTENSION);

                if(in_array($mimeType, $mimeTypeAvailable)){

                    if($_FILES['picture']['size'] <= $maxSize){

                        if(!is_dir($uploadDir)){
                            mkdir($uploadDir, 0755);
                        }

                        $newPictureName = uniqid('picture_').'.'.$extension;

                        if(!move_uploaded_file($_FILES['picture']['tmp_name'], $uploadDir.$newPictureName)){
                            $errors[] = 'Erreur lors de l\'upload de la photo';
                        }
                    }
                    else {
                        $errors[] = 'La taille du fichier excède 2 Mo';
                    }

                }
                else {
                    $errors[] = 'Le fichier n\'est pas une image valide';
                }
            }
            else {
                $errors[] = 'Aucune photo sélectionnée';
            }

// var_dump($post);
// var_dump($errors);
			
			if(count($errors) === 0)
			{

				$datas = [
                    // colonne sql => valeur à insérer
                    'ref'				=> $post['ref'],
					'name'				=> $post['name'],
                    'picture'   		=> 'upload/'.$newPictureName,
                    'description'		=> $post['description'],
                    'price_ht'          => $post['price_ht'],
                    'taxes'				=> $post['taxes'],
                    'discount'			=> $post['discount'],
                    'category'			=> $post['category'],
                    'stock'				=> $post['stock'],
                    'quantity'			=> 10,
                    'note'				=> 10,
                    'id_shop'			=> 10,
                    'id_client'			=> 10,



                    
                ];



				$item = new ItemsModel();
				$item->update($datas, $id);
			}
			else 
			{
				$formError = true;
				echo implode('br',$errors);			
			}
	}
		$this->show('item/UpdateItem',['view'=> $view]);
	}



	

   //Methode pour supprimer un article
	public function DeleteItem($id)
	{

		$deleteItem = new ItemsModel();
		
		$deleteItem->delete($id);

		$this->show('item/DeleteItem');

	}


   //Methode pour visualiser un article
   public function viewItem($id)
    {
    // On instancie le model qui permet d'effectuer un viewArticle
        
            $viewItem = new ItemsModel();
                        
            	$errors = [];
                $post = [];
                $displayForm = true;
                $prixttc = '';

                if(!empty($_POST))
                {

                    foreach($_POST as $key => $value){
                        $post[$key] = trim(strip_tags($value));
                    }

                        if(strlen($post['ref'] < 3)){
                        $errors[] = 'Le titre doit faire au moins 3 caractères';
                    }


                    if(strlen($post['description'] <10)){
                        $errors[] = 'L\'article doit avoir au moins 10 caractères';
                    }
                    
                    
                    if(count($errors) === 0)
                    {
                        $formError = true;
                        echo implode('br',$errors);

                    }
                    else 
                    {
                        $datas = [
                            // colonne sql => valeur à insérer
                            'ref'		=> $post['ref'],
                            'description'	=> $post['description'],
                            'id_item'   => $id,

                        ];

                        $commentItem->insert($datas);
                       
                    }
            }
            
            $view = $viewItem->find($id); 

            // $prixttc = ($view['price_ht'] * ($view['taxes']/100));
            // var_dump($prixttc);

            $params = [
                'view' => $view
               
            ];
		$this->show('item/ViewItem', $params);
    }

    //Methode pour la liste des articles
    public function listItems()
	{
		// On instancie le model qui permet d'effectuer un findAll() 
		$itemModel = new ItemsModel();
		$items = $itemModel->findAll();
		// var_dump($items);
		$params = [
			'items' => $items
		];
		$this->show('item/listItem', $params);
	}
	/**
	 * Page d'accueil par défaut
	 */

	// Methode pour l'ajout d'un article
	public function AddItem()
	{

		  	$maxSize = (1024 * 1000) * 2; // Taille maximum du fichier
        	$uploadDir = $_SERVER['DOCUMENT_ROOT'].$_SERVER['W_BASE'].'/assets/upload/'; // Répertoire d'upload
        	$mimeTypeAvailable = ['image/jpg', 'image/jpeg', 'image/pjpeg', 'image/png', 'image/gif'];

	        $errors = [];
	        $post = [];
	        $displayForm = true;


		if(!empty($_POST))
		{
			
			foreach($_POST as $key => $value){
				$post[$key] = trim(strip_tags($value));
			}
			//gestion de la reference
			if(!strlen($post['ref'] < 3)){
				$errors[] = 'La reference doit faire au moins 3 caractères';
			}

			//gestion de la du nom de l'article
			if(!strlen($post['name'] <2)){
				$errors[] = 'Le nom du titre doit avoir au moins 10 caractères';
			}

			//gestion de la description
			if(!strlen($post['description'] <10)){
				$errors[] = 'Le nom de l\'article doit avoir au moins 10 caractères';
			}

			//gestion du prix ht
			if(!is_numeric($post['price_ht'])){
				$errors[] = 'Le montant est incorrect';
			}

			//gestion de la tva
			if(!empty($post['tva'])){
				$errors[] = 'Lmerci de choisir une tva';
			}

			//gestion de la remise
			if(!is_numeric($post['discount'])){
				$errors[] = 'Le montant de la remise en incorrect entre 0 et 90';
			}

			//gestion de la categorie
			if(empty($post['category'])){
				$errors[] = 'merci de choisir une categorie';
			}


			//gestion du stock
			if(!is_numeric($post['stock']) || !($post['stock'] >= 1)){
				$errors[] = 'Le montant du incorrect';
			}

			//gestion de la photo de l'article
			if(isset($_FILES['picture']) && $_FILES['picture']['error'] === 0){

                $finfo = new \finfo();
                $mimeType = $finfo->file($_FILES['picture']['tmp_name'], FILEINFO_MIME_TYPE);

                $extension = pathinfo($_FILES['picture']['name'], PATHINFO_EXTENSION);

                if(in_array($mimeType, $mimeTypeAvailable)){

                    if($_FILES['picture']['size'] <= $maxSize){

                        if(!is_dir($uploadDir)){
                            mkdir($uploadDir, 0755);
                        }

                        $newPictureName = uniqid('picture_').'.'.$extension;

                        if(!move_uploaded_file($_FILES['picture']['tmp_name'], $uploadDir.$newPictureName)){
                            $errors[] = 'Erreur lors de l\'upload de la photo';
                        }
                    }
                    else {
                        $errors[] = 'La taille du fichier excède 2 Mo';
                    }

                }
                else {
                    $errors[] = 'Le fichier n\'est pas une image valide';
                }
            }
            else {
                $errors[] = 'Aucune photo sélectionnée';
            }

// var_dump($post);
// var_dump($errors);
			
			if(count($errors) === 0)
			{

				$datas = [
                    // colonne sql => valeur à insérer
                    'ref'				=> $post['ref'],
					'name'				=> $post['name'],
                    'picture'   		=> 'upload/'.$newPictureName,
                    'description'		=> $post['description'],
                    'price_ht'          => $post['price_ht'],
                    'taxes'				=> $post['taxes'],
                    'discount'			=> $post['discount'],
                    'category'			=> $post['category'],
                    'stock'				=> $post['stock'],
                    'quantity'			=> 10,
                    'note'				=> 10,
                    'id_shop'			=> 10,
                    'id_client'			=> 10,

                ];

				$item = new ItemsModel();
				$item->insert($datas);
			}
			else 
			{
				$formError = true;
				echo implode('br',$errors);			
			}
	}
		$this->show('item/AddItem');
	}

}

