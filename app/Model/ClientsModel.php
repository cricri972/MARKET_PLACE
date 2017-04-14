<?php
namespace Model;

class ClientsModel extends \W\Model\UsersModel
{


	public function __construct()
	{
		parent::__construct();
		$this->setTable('clients');
	}

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

	public function find($email)
	{
		if (!is_string($email)){
			return false;
		}

		$sql = 'SELECT password FROM ' . $this->table . ' WHERE email  = :email LIMIT 1';
		$sth = $this->dbh->prepare($sql);
		$sth->bindValue(':email', $email);
		$sth->execute();

		return $sth->fetch();
	}


}