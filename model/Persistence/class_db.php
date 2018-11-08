<?php

class db {

	private $server;
	private $username;
	private $password;
	private $dbname;
	private $link;
	
	
	public function __construct(){
		$this->setServer($GLOBALS['server']);
		$this->setUsername($GLOBALS['USER']);
		$this->setPassword($GLOBALS['PASS']);
		$this->setDbname($GLOBALS['bd']);
	}
		
	public function getServer(){
		return $this->server;
	}

	public function setServer($value){
		$this->server = $value;
	}
	
	public function getUsername(){
		return $this->username;
	}

	public function setUsername($value){
		$this->username = $value;
	}
	
	public function getPassword(){
		return $this->password;
	}

	public function setPassword($value){
		$this->password = $value;
	}
	
	public function getDbname(){
		return $this->dbname;
	}

	public function setDbname($value){
		$this->dbname = $value;
	}
	
	public function connect()	{
	
		$this->link=mysqli_connect($this->getServer(),$this->getUsername(),$this->getPassword(), $this->getDbname());			
		if (!$this->link) {
			die('Error, could not connect: ' .$this->error());
		}				
		return $this->link;
	}
	
	public function close()	{
		return mysqli_close($this->link);
	}

	public function error()	{
		return mysqli_error($this->link);
	}

	public function consulta($query){		
		$con= $this->connect();	
		$resultat = mysqli_query($con, $query) or die('Error, query failed: '.$this->error());

		return $resultat;
	}
}    
?>
