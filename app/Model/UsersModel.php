<?php
namespace Model;

// UsersModel => cherche une table SQL nommée 'users'
// "extends récupère automatiquement toutes les fonctionnalités/propriétés du fichier Model du framework W"

class UsersModel extends \W\Model\UsersModel
{

	/**
	 * Vérifie qu'une combinaison d'email/username et mot de passe (en clair) sont présents en bdd et valides
	 * @param  string $usernameOrEmail Le pseudo ou l'email à test
	 * @param  string $plainPassword Le mot de passe en clair à tester
	 * @return int  0 si invalide, l'identifiant de l'utilisateur si valide
	 */
	public function isValidLoginInfo($usernameOrEmail, $plainPassword)
	{

		$app = getApp();

		$usernameOrEmail = strip_tags(trim($usernameOrEmail));
		$foundUser = $this->getUserByUsernameOrEmail($usernameOrEmail);
		if(!$foundUser){
			return 0;
		}

		if(password_verify($plainPassword, $foundUser[$app->getConfig('security_password_property')])){
			return (int) $foundUser[$app->getConfig('security_id_property')];
		}

		return 0;
	}
}