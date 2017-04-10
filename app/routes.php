<?php
	
	$w_routes = array(


		// GET|POST => méthode acceptée
        // /contactez-nous => URL (lien) de la page
        // Default#contact => Default : nom du controller, contact : nom de la méthode/fonction
        // default_contact => le nom de la route

		['GET', '/', 'Default#home', 'default_home'],
		['GET|POST', '/client/add', 'Clients#addClient', 'Clients_addClient'],
		['GET|POST', '/client/list', 'Clients#listClient', 'Clients_listClient'],
		['GET|POST', '/client/details/[i:id]', 'Clients#viewClient', 'Clients_viewClient'],
		['GET|POST', '/client/delete/[i:id]', 'Clients#deleteClient', 'Clients_deleteClient'],
		['GET|POST', '/client/modify/[i:id]', 'Clients#modifyClient', 'Clients_modifyClient'],
		['GET|POST', '/client/login', 'Clients#loginClient', 'Clients_loginClient'],


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

	);