<?php
	
$w_routes = array(

/*
['METHODE', 'URL', NAMECONTROLLER#METHODE,nom de la route]

*/

	
['GET', '/', 'Default#home', 'default_home'], 				// Accueil
//['GET|POST', '/addshop/', 'Shop#addShop', 'shop_formShop'], // Ajout boutique
['GET|POST', '/listshop/', 'Shop#listShop', 'shop_listShop'], // Liste des boutiques
['GET|POST', '/viewshop/[:id]', 'Shop#viewShop', 'shop_viewShop'],	// Détails de la boutique
['GET|POST', '/mailtoshop/', 'Shop#mailToShop', 'shop_mailToShop'], // adresser Mail
['GET|POST', '/deleteshop/[:id]', 'Shop#deleteShop', 'shop_deleteShop'], // Suppression boutique
['GET|POST', '/addshop/', 'Shop#addOrUpdateShop', 'shop_addShop'], // Ajout boutique
['GET|POST', '/updateshop/[:id]', 'Shop#addOrUpdateShop', 'shop_updateShop'], // Maj boutique


);

	/* ['GET', '/article/enum', 'CreateArticle#enumArticle', 'article_enumArticle']
	*
	* '/article/enum' tapé dans url 
	*
	* 'Article# fait reférence au controleur 'ArticleController 
	*
	*	#enumArticle : la fonction appelée issue du controleur ArticleController
    
    * dernier argument correspond a la vue et son chemin
    
	//'shop_formShop'
		
		//['GET|POST', '/shop', 'Shop#addShop', 'shop_detail_Shop'],
		
        
        //['GET|POST', '/article/', 'Article#createArticle', 'article_createArticle'],
		
        
        //['GET|POST', '/article/[:id]/', 'Article#detailArticle', 'article_detailArticle'],
		
                
        //['GET|POST', '/mail/', 'Mail#newMail', 'mail_newMail'],
	*
	*
	*
	*
	*
	*
	*
	**/