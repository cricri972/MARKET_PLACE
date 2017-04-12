<?php

namespace W\Controller;

use W\Security\AuthentificationModel;
use W\Security\AuthorizationModel;

/**
 * Le contrôleur de base à étendre
 */
class MarketController
{
    
    
  public function header()  
    

$name = 'Madinina Market';



 
$selectOne = $bdd->prepare('SELECT * FROM shop LIMIT 3'); // ou DSC pour descendant et ASC ascendant

if($selectOne->execute()){
		$article = $selectOne->fetchAll(PDO::FETCH_ASSOC);
	}
	else {
		// Erreur de développement
		var_dump($selectOne->errorInfo());
		die; //Arrêter le script
	}

}
