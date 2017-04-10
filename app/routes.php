<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'default_home'],
		
        ['GET|POST', '/addshop/', 'Shop#addShop', 'shop_formShop'], 
	    ['GET|POST', '/listshop/', 'Shop#listShop', 'shop_listShop'],
	    ['GET|POST', '/detailsshop/[:id]', 'Shop#detailsShop', 'shop_detailsShop'],
		['GET|POST', '/mailtoshop/', 'Shop#mailToShop', 'shop_mailToShop'],
		['GET|POST', '/deleteshop/[:id]', 'Shop#deleteShop', 'shop_deleteShop'],

	
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