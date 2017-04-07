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


		
		['GET|POST', '/addItem', 'Item#AddItem', 'item_addItem'],
		['GET', '/list', 'Item#listItems', 'item_listItem'],
		['GET|POST', '/view/[i:id]/', 'Item#ViewItem', 'item_ViewItem'],
		['GET|POST', '/delete/[i:id]/', 'Item#DeleteItem', 'item_DeleteItem'],
		['GET|POST', '/update/[i:id]/', 'Item#UpdateItem', 'item_UpdateItem'],

	);