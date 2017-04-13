<?php
	

$w_routes = array(


	
['GET', '/', 'Default#home', 'default_home'], 				// Accueil
//['GET|POST', '/addshop/', 'Shop#addShop', 'shop_formShop'], // Ajout boutique
['GET|POST', '/shop/list/', 'Shop#listShop', 'shop_listShop'], // Liste des boutiques
['GET|POST', '/shop/view/[:id]', 'Shop#viewShop', 'shop_viewShop'],	// Détails de la boutique
['GET|POST', '/shop/mailto/', 'Shop#mailToShop', 'shop_mailToShop'], // adresser Mail
['GET|POST', '/shop/[:id]', 'Shop#deleteShop', 'shop_deleteShop'], // Suppression boutique
['GET|POST', '/shop/add/', 'Shop#addOrUpdateShop', 'shop_addShop'], // Ajout boutique
['GET|POST', '/shop/modify/[:id]', 'Shop#addOrUpdateShop', 'shop_addOrUpdateShop'], // Maj boutique



 
        ['GET|POST', '/shop', 'Market#shop', 'Market_shop'],
        ['GET|POST', '/admin', 'Market#admin', 'Market_admin'],
        ['GET|POST', '/client', 'Market#client', 'Market_client'],
        ['GET|POST', '/accueilslider', 'Market#accueilSlider', 'Market_accueilSlider'],
        
		// GET|POST => méthode acceptée
        // /contactez-nous => URL (lien) de la page
        // Default#contact => Default : nom du controller, contact : nom de la méthode/fonction
        // default_contact => le nom de la route

		['GET|POST', '/client/add', 'Clients#addClient', 'Clients_addClient'],
		['GET|POST', '/client/list', 'Clients#listClient', 'Clients_listClient'],
		['GET|POST', '/client/details/[i:id]', 'Clients#viewClient', 'Clients_viewClient'],
		['GET|POST', '/client/delete/[i:id]', 'Clients#deleteClient', 'Clients_deleteClient'],
		['GET|POST', '/client/modify/[i:id]', 'Clients#modifyClient', 'Clients_modifyClient'],
		['GET|POST', '/client/login', 'Clients#loginClient', 'Clients_loginClient'],
		['GET|POST', '/client/logout', 'Clients#logoutClient', 'Clients_logoutClient'], 
        
        
		['GET|POST', '/user/add', 'Users#addUser', 'Users_addUser'],
		['GET|POST', '/user/list', 'Users#listUser', 'Users_listUser'],
		['GET|POST', '/user/details/[i:id]', 'Users#viewUser', 'Users_viewUser'],
		['GET|POST', '/user/delete/[i:id]', 'Users#deleteUser', 'Users_deleteUser'],
		['GET|POST', '/user/modify/[i:id]', 'Users#modifyUser', 'Users_modifyUser'],
		['GET|POST', '/user/login', 'Users#loginUser', 'Users_loginUser'],
        
        
        
		['GET|POST', '/addItem', 'Item#AddItem', 'item_addItem'],
		['GET', '/list', 'Item#listItems', 'item_listItem'],
		['GET|POST', '/view/[i:id]/', 'Item#ViewItem', 'item_ViewItem'],
		['GET|POST', '/delete/[i:id]/', 'Item#DeleteItem', 'item_DeleteItem'],
		['GET|POST', '/update/[i:id]/', 'Item#UpdateItem', 'item_UpdateItem'],
		['GET|POST', '/search', 'Item#searchItems', 'item_searchItems'],


	);

