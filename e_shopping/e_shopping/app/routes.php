<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'default_home'],
       
        ['GET|POST', '/shop', 'Market#shop', 'Market_shop'],
        ['GET|POST', '/admin', 'Market#admin', 'Market_admin'],
        ['GET|POST', '/client', 'Market#client', 'Market_client'],
        ['GET|POST', '/accueilslider', 'Market#accueilSlider', 'Market_accueilSlider'],
        
	);