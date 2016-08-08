<?php
class Account{
	
	public $account_id;
	public $email;
	public $password;
	public $created_on;
	public $firstname;
	public $lastname;
	
	/**
	 * get account details for a specified account 
	 * @return mixed
	 */
	public function accountDetails() {
		
		$dbInstance = MiNoteDB::getInstance();
		$sqlCon = $dbInstance->getConnection();
		
		$email = $sqlCon->escape_string($this->email);
		
		$query = "select * from accounts where email = '$email'";
		
		$result = $sqlCon->query($query);
		
		return $result->fetch_assoc();
	}
	
	/**
	 * adds a new account for a user
	 * @return boolean
	 */
	public function add() {
		$dbInstance = MiNoteDB::getInstance();
		$sqlCon = $dbInstance->getConnection();
		
		$email = $sqlCon->escape_string($this->email);
		$account_id = $sqlCon->escape_string($this->account_id);
		$password = $sqlCon->escape_string($this->password);
		$firstname = $sqlCon->escape_string($this->firstname);
		$lastname = $sqlCon->escape_string($this->lastname);
		$created_on = $sqlCon->escape_string($this->created_on);
		
		$query = "insert into accounts(account_id,email,password,created_on,firstname,lastname)";
		$query.="values('$account_id','$email','$password',$created_on,'$firstname','$lastname')";
		
		return $sqlCon->query($query);
		
	}
	
	/**
	 * get all accounts available for admin purposes
	 * @return mixed
	 */
	public function getAll(){
		
		$dbInstance = MiNoteDB::getInstance();
		$sqlCon = $dbInstance->getConnection();
		
		$query = "select * from accounts";
		
		$result = $sqlCon->query($query);
		
		$results = array();
		$counter = 0;
		while($row = $result->fetch_assoc()){
		
			$results[$counter] = $row;
			$counter++;
		}
		
		return $results;
	}
}