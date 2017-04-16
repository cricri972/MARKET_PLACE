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

public function findAllEmail($orderBy = '', $orderDir = 'ASC', $limit = null, $offset = null)
	{

		$sql = 'SELECT id, email, token FROM ' . $this->table;
		if (!empty($orderBy)){

			//sécurisation des paramètres, pour éviter les injections SQL
			if(!preg_match('#^[a-zA-Z0-9_$]+$#', $orderBy)){
				die('Error: invalid orderBy param');
			}
			$orderDir = strtoupper($orderDir);
			if($orderDir != 'ASC' && $orderDir != 'DESC'){
				die('Error: invalid orderDir param');
			}
			if ($limit && !is_int($limit)){
				die('Error: invalid limit param');
			}
			if ($offset && !is_int($offset)){
				die('Error: invalid offset param');
			}

			$sql .= ' ORDER BY '.$orderBy.' '.$orderDir;
		}
        if($limit){
            $sql .= ' LIMIT '.$limit;
            if($offset){
                $sql .= ' OFFSET '.$offset;
            }
        }
		$sth = $this->dbh->prepare($sql);
		$sth->execute();

		return $sth->fetchAll();
	}

 	

 	public function find($id)
	{
		if (!is_numeric($id)){
			return false;
		}

		$sql = 'SELECT * FROM ' . $this->table . ' WHERE ' . $this->primaryKey .'  = :id LIMIT 1';
		$sth = $this->dbh->prepare($sql);
		$sth->bindValue(':id', $id);
		$sth->execute();

		return $sth->fetch();
	}

	public function findtoken($returnToken)
   {
       $sql = 'SELECT id, email, token FROM '.$this->table.' WHERE token = :token';
       $sth = $this->dbh->prepare($sql);
       $sth->bindValue(':token',$returnToken);
       $sth->execute();

       return $sth->fetch();
   }

   public function updatePassword(array $data, $id, $stripTags = true)
	{
		if (!is_string($id)){
			return false;
		}
		
		$sql = 'UPDATE ' . $this->table . ' SET ';
		foreach($data as $key => $value){
			$sql .= "`$key` = :$key, ";
		}
		// Supprime les caractères superflus en fin de requète
		$sql = substr($sql, 0, -2);
		$sql .= ' WHERE email = :id';

		$sth = $this->dbh->prepare($sql);
		foreach($data as $key => $value){
			$value = ($stripTags) ? strip_tags($value) : $value;
			$sth->bindValue(':'.$key, $value);
		}
		$sth->bindValue(':id', $id);

		if(!$sth->execute()){
			return false;
		}
		return $this->find($id);
	}

	public function findmail($email)
   {
       if (!is_string($email)){
           return false;
       }

       $sql = 'SELECT * FROM ' . $this->table . ' WHERE email = :email LIMIT 1';
       $sth = $this->dbh->prepare($sql);
       $sth->bindValue(':email', $email);
       $sth->execute();

       return $sth->fetch();
   }




	// public function getUserByUsernameOrEmail($usernameOrEmail)
	// {

	// 	$app = getApp();

	// 	$sql = 'SELECT * FROM ' . $this->table . 
	// 		   ' WHERE ' . $app->getConfig('security_username_property') . ' = :username' . 
	// 		   ' OR ' . $app->getConfig('security_email_property') . ' = :email LIMIT 1';

	// 	$dbh = ConnectionModel::getDbh();
	// 	$sth = $dbh->prepare($sql);
	// 	$sth->bindValue(':username', $usernameOrEmail);
	// 	$sth->bindValue(':email', $usernameOrEmail);
		
	// 	if($sth->execute()){
	// 		$foundUser = $sth->fetch();
	// 		if($foundUser){
	// 			return $foundUser;
	// 		}
	// 	}

	// 	return false;
	// }


	// public function find($email)
	// {
	// 	if (!is_string($email)){
	// 		return false;
	// 	}

	// 	$sql = 'SELECT password FROM ' . $this->table . ' WHERE email  = :email LIMIT 1';
	// 	$sth = $this->dbh->prepare($sql);
	// 	$sth->bindValue(':email', $email);
	// 	$sth->execute();

	// 	return $sth->fetch();
	// }



}