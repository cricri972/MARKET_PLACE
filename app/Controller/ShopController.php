<?php //ShopController

namespace Controller;

use \W\Controller\Controller;
use \Model\ShopModel;

class ShopController extends Controller
{
	
	

	public function listShop()
	{
		//Instanciation du model appelant findAll

		$shopModel = new ShopModel(); // instanciation 
		$shops = $shopModel -> findAll(); //resultat requete (sous entendu select * + fetchAll) envoyé dans un tableau
        
        //echo '<br>';
		//var_dump($shops);

		$params = ['shop' => $shops];

        //echo '<br>';
		//var_dump($params);
        //echo '<br>';
		//var_dump($articles);
		$this->show('shop/listShop', $params); // template a afficher pour resultats
	}
	
	public function viewShop($id)
	{
		$viewShopModel = new ShopModel();
		$viewShop = $viewShopModel -> find($id); //tableau/enregistrement d'id $id

		//var_dump($detailsShop); // affiche valeurs enregistrement
		$info = ['shop' => $viewShop]; 
		//var_dump($info);

		$this->show('shop/viewShop', $info);
	}
/* ------------------- UPDATE SHOP -------------------------------------------------*/

	public function addOrUpdateShop($id = 0)
	{	

		$errors = [];
		$post = [];
		//echo $id;
		//echo '<br>';
		//var_dump($_POST);
		$maxSize = (1024 * 1000) * 2; // Taille maximum du fichier
		//$uploadDir = 'HHH/uploads/'; // Répertoire d'upload
		$mimeTypeAvailable = ['image/jpg', 'image/jpeg', 'image/pjpeg', 'image/png', 'image/gif'];

		$shopModel = new ShopModel;
    	$shop = $shopModel->find($id);
		//var_dump($shop);

		if(!empty($_POST)){

			$post = array_map('trim', array_map('strip_tags', $_POST));

			/*if((strlen($post['name']) < 1) && (strlen($post['name']) > 20)) {
				$errors[] = 'Le nom doit comporter  entre 1 et 20 caractères ';
			}*/

			if(strlen($post['commercialName'])< 1 || strlen($post['commercialName']) > 20) {
				$errors[] = 'Le nom commercial doit comporter  entre 1 et 20 caractères ';
			}
			
			if(strlen($post['raisonSocial']) < 2 || strlen($post['raisonSocial']) > 30) {
				$errors[] = 'La raison sociale doit comporter  entre 2 et 30 caractères ';
			}

			if(!is_numeric($post['immatriculation']) || strlen($post['immatriculation']) != 14) {
				$errors[] = 'Le numéro SIRET doit comporter  uniquement 14 chiffres !';
			}

			if(!is_numeric(substr($post['apeCode'],0,4)) && !is_string(substr($post['apeCode'],5,5)) && !strlen($post['apeCode']==5)) {
				$errors[] = 'Le code APE comporte 4 chiffres + 1 lettre !';
			}

			if(strlen($post['nameGerant']) < 1 || strlen($post['nameGerant']) > 40) {
				$errors[] = 'Le nom du gérant doit comporter  entre 1 et 40 caractères ! ';
			}

			if(!filter_var($post['email'], FILTER_VALIDATE_EMAIL)) {
				$errors[] = 'Votre email n\'est pas conforme !';
			}

			if(!is_numeric($post['phone'])) {
				$errors[] = 'Votre N° de téléphone n\'est pas conforme';
			}
			
			
			if(strlen($post['adress']) < 2 || strlen($post['adress']) > 30) {
				$errors[] = 'Votre adresse ne semble pas complète. Elle doit comporter  entre 2 et 30 caractères ! ';
			}
			if(strlen($post['city']) < 2 || strlen($post['city']) > 30) {
				$errors[] = 'La ville doit comporter  entre 2 et 30 caractères ! ';
			}
			if(!is_numeric($post['zipcode']) || strlen($post['zipcode']) < 5) {
				$errors[] = 'Le code postal doit comporter uniquement 5 chiffres ! ';
			}

// AJOUT LOGO
		//$uploadDir = '/'.$post['commercialName'].'/uploads/'; // Répertoire d'upload

			if(isset($_FILES['logo']) && $_FILES['logo']['error'] === 0){

				$finfo = new \finfo();
				$mimeType = $finfo->file($_FILES['logo']['tmp_name'], FILEINFO_MIME_TYPE);

				$extension = pathinfo($_FILES['logo']['name'], PATHINFO_EXTENSION);

				if(in_array($mimeType, $mimeTypeAvailable)){

					if($_FILES['logo']['size'] <= $maxSize){

						$uploadPath = $_SERVER['DOCUMENT_ROOT'].$_SERVER['W_BASE'].'/assets/'; // Répertoire d'upload

						$uploadDir = 'upload/'.$post['commercialName'].'/'; 

				//var_dump($uploadDir); //var_dump($_FILES);

						if(!is_dir($uploadPath.$uploadDir)){
							mkdir($uploadPath.$uploadDir, 0755);
						}

						$newPictureName = uniqid('logo_').'.'.$extension;
				//$newPictureName = 'logo.'.$extension;

				//if(!move_uploaded_file($_FILES['cover']['tmp_name'], $uploadDir.$newPictureName)){
						if(!move_uploaded_file($_FILES['logo']['tmp_name'], $uploadPath.$uploadDir.$newPictureName)){
							$errors[] = 'Erreur lors de l\'upload du logo';
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
// FIN GESTION LOGO
		
			if(count($errors) === 0){
				
				$result = '<p style="color:green">Les informations saisies sont correctes !</p>';
			// ecriture dans la base
				$post['logo'] = $uploadDir.$newPictureName;
				
				if($id !=0){
					$shopModel->update($post, $id);
					
				}

				else if($id === 0){
					$shopModel->insert($post);
				}
           
                
                
			}
			else { // Si j'ai des erreurs

				$result = '<p style="color:red">'.implode('<br>', $errors).'</p>';
				$shop = $post;
			}

			
		
//*************************************************************************
		}

		$params = ['shop'=> $shop,
                  'result'=>$result];
		
		//var_dump($params);
		$this->show('shop/formShop', $params); //view 

	}
	
	//	$info = ['shop' => $viewShop];
	//	$this->redirectToRoute('shop_viewShop', $);




	public function deleteShop($id)
	{
		$deleteShopModel = new ShopModel();
		$deleteShop = $deleteShopModel -> delete($id);

		$this->redirectToRoute('shop_listShop');
	}

}







 
