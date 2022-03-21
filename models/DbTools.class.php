<?php

/**
 * Class de connexion à la base de données 
 *
 * @author Cristian Tirche
 */

Global $BDD; //Variable de la BDD
class dbTools
{

public $Host;
public $Dbname;
public $Username;
public $Password;
public $Dns;
public $Connection = NULL; //$Db
        
/**	 Connection principale à la base données  */
private function connect ()  {
	try {
		$this->Connection = new PDO($this->Dns, $this->Username, $this->Password);
		//echo 'Connexion réussie à la BDD!!! ';
	} catch (PDOException $e) {
		echo 'Connexion à la base de données échouée ! : ' . $e->getMessage();
	}
    return true;
}     

/**	 Déclaration des variables	*/
/**
 * @access public
 * @param string	$Query 
 * @param int		$Page 
 * @param int		$NumRows 
 * @return resultset
 * @author 
 * @todo Gérer la pagination
 */


/**	 Déclaration des variables	*/
public function query($Query,$showError = true) {
	$ResultSet = $this->Connection->query($Query);
	if ($ResultSet === FALSE && $showError === true) {
		//echo "\nPDO::errorInfo():\n";
		//print_r($this->Connection->errorInfo());
	} else {
		return $ResultSet;
	}
}


/** 
*	Execution d'une requette sans avoir d'objet en retour mais uniquement 
*	le nombre de lignes affectées
*/  
public function simpleQuery($sql){
    $count = $this->Connection->exec($sql);
}         
        

public function getLastId(){
    return $this->Connection->lastInsertId();
}
        
/**
 * 	Définir les informations necessaires pour la connexion à la BDD
 */
public function __construct() {
		$this->Host = DATABASE_HOST;
		$this->Dbname = DATABASE_NAME;
		$this->Username = DATABASE_USERNAME;
		$this->Password = DATABASE_PASSWORD;
		$this->Dns = "mysql:dbname=$this->Dbname;host=$this->Host;charset=UTF8MB4";
		$this->connect();	
		
		return true;
	}        
}