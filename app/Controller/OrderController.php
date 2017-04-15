<?php
namespace Controller;

use \W\Controller\Controller;

class OrderController extends Controller
{
	public function createBasket($id){
		//unset($_SESSION['basket']);
//var_dump($product);
		$itemModel = new \Model\ItemsModel();
		$product = $itemModel->find($id);
/*$itemModel = new \Model\ItemsModel();
		$product = $itemModel->find($id);*/

		if(!isset($_SESSION['basket'])){

			echo '<br>';
			echo 'session basket n\'existe pas';
			
			echo '<br>';
		

		$_SESSION['basket'][] = [
					'id'	  => $id,
					'name'    => $product['name'],
					'ref' 	  => $product['ref'],
					'qty'	  => 0 ,
					'price_ht'=> $product['price_ht'],
					'taxes'	  => $product['taxes'],
					'discount'=> $product['discount'],


				];

				//var_dump($_SESSION['basket']);
			}  
				

		if(isset($_SESSION['basket'])){

			echo 'session basket existe';

			foreach($_SESSION['basket'] as $key => $value) {

			/*	if($value['id'] == $id){
					$_SESSION['basket'][$key]['qty']++;
				}
*/
				$productsId[] = $value['id'];
			}


			if(!in_array($id, $productsId)) {
				$_SESSION['basket'][] = [
					'id'	  => $id,
					'name'    => $product['name'],
					'ref' 	  => $product['ref'],
					'qty'	  => 1 ,
					'price_ht'=> $product['price_ht'],
					'taxes'	  => $product['taxes'],
					'discount'=> $product['discount'],
				];
			}
			else {
				foreach($_SESSION['basket'] as $key => $value){
					if($value['id'] === $id){
					$_SESSION['basket'][$key]['qty']++;
					}
				}
			}
		
	}

$params = ['item' => $_SESSION['basket']] ;

$this->show('order/basket', $params); 


}

	public function clearBasket(){
		if(isset($_SESSION['basket'])){
		unset($_SESSION['basket']);


		}	
		$this->redirectToRoute('Market_accueilSlider');
	}



}
// $this->show('order/basket',['id'=> $item['id']]);
	

//echo'<br>';

//debug($_SESSION['basket']);


	//if(isset($_SESSION['basket']['id'])){

		//echo "SESSION EXISTE";
	//	foreach ($_SESSION['basket'] as $key => $value) {

			/*if($value['id']== $id){
				$_SESSION['basket'][$key]['qty']++;
			} */		
		//echo 'params';
		//var_dump($params);
					 
		

	//}




		

	

		

//		var_dump($_SESSION['basket']);
		
		  
			//debug($_SESSION);
//			var_dump($_SESSION);
			
		  
	

	/*function addItem($name,$qty,$price){

   		//Si le basket existe
   		if (creationbasket() && !isVerrouille()){
      		//Si le produit existe déjà on ajoute seulement la quantité
      		$positionProduit = array_search($name,  $_SESSION['basket']['name']);

      		if ($positionProduit !== false){
        		$_SESSION['basket']['qty'][$positionProduit] += $qty ;
      		}
      		else {
		    //Sinon on ajoute le produit
		    array_push( $_SESSION['basket']['name'],$name);
		    array_push( $_SESSION['basket']['qty'],$qty);
		    array_push( $_SESSION['basket']['price'],$price);
      		}
   		}
   		else
   			echo "Un problème est survenu veuillez contacter l'administrateur du site.";
	}*/

/*	function supprimerArticle($name){
   //Si le panier existe
   if (creationbasket() && !isVerrouille())
   {
      //Nous allons passer par un panier temporaire
      $tmp=array();
      $tmp['name'] = array();
      $tmp['qty'] = array();
      $tmp['price'] = array();
      $tmp['verrou'] = $_SESSION['basket']['verrou'];

      for($i = 0; $i < count($_SESSION['basket']['name']); $i++)
      {
         if ($_SESSION['basket']['name'][$i] !== $name)
         {
            array_push( $tmp['name'],$_SESSION['basket']['name'][$i]);
            array_push( $tmp['qty'],$_SESSION['basket']['qty'][$i]);
            array_push( $tmp['price'],$_SESSION['basket']['price'][$i]);
         }

      }
      //On remplace le panier en session par notre panier temporaire à jour
      $_SESSION['basket'] =  $tmp;
      //On efface notre panier temporaire
      unset($tmp);
   }
   else
   echo "Un problème est survenu veuillez contacter l'administrateur du site.";
}

function modifierQTeArticle($name,$qty){
   //Si le basket éxiste
   if (creationbasket() && !isVerrouille())
   {
      //Si la quantité est positive on modifie sinon on supprime l'article
      if ($qty > 0)
      {
         //Recharche du produit dans le basket
         $positionProduit = array_search($name,  $_SESSION['basket']['name']);

         if ($positionProduit !== false)
         {
            $_SESSION['basket']['qty'][$positionProduit] = $qty ;
         }
      }
      else
      supprimerArticle($name);
   }
   else
   echo "Un problème est survenu veuillez contacter l'administrateur du site.";
}

function MontantGlobal(){
   $total=0;
   for($i = 0; $i < count($_SESSION['basket']['name']); $i++)
   {
      $total += $_SESSION['basket']['qty'][$i] * $_SESSION['basket']['price'][$i];
   }
   return $total;
}

function isVerrouille(){
   if (isset($_SESSION['basket']) && $_SESSION['basket']['verrou'])
   return true;
   else
   return false;
}

function compterArticles()
{
   if (isset($_SESSION['basket']))
   return count($_SESSION['basket']['name']);
   else
   return 0;

}

function supprimebasket(){
   unset($_SESSION['basket']);
}

*/




