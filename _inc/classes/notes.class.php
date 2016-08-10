<?php
class Notes {
	
	public $id;
	public $title;
	public $content;
	public $created_on;
	public $modified_on;
	public $platform;
	public $synced;
	public $tags;
	public $color_tag;
	public $location;
	public $access;
	public $notebook;
	public $account_id;
	/**
	 * get all notes in the database for a specific account
	 * @return mixed
	 */
	public function getNotes() {
		
		$dbInstance = MiNoteDB::getInstance();
		$sqlCon = $dbInstance->getConnection();
		
		$account_id = $sqlCon->escape_string($this->account_id);
		
		$query = "SELECT * FROM notes where account_id = '$account_id'";
		
		$result = $sqlCon->query($query);
		
		$results = array();
		$counter = 0;
		while($row = $result->fetch_assoc()){
		
			$results[$counter] = $row;
			$counter++;
		}
		
		return $results;
		
	}
	/**
	 * get the specified note using its id
	 * @return mixed
	 */
	public function getNoteById() {
	
		$dbInstance = MiNoteDB::getInstance();
		$sqlCon = $dbInstance->getConnection();
	
		$id = $sqlCon->escape_string($this->id);
	
		$query = "SELECT * FROM notes where id = '$id'";
	
		$result = $sqlCon->query($query);
		
		return $result->fetch_assoc();
	
	}
	/**
	 * deletes a note specified by id
	 * @return boolean
	 */
	public function deleteNote() {
	
		$dbInstance = MiNoteDB::getInstance();
		$sqlCon = $dbInstance->getConnection();
	
		$id = $sqlCon->escape_string($this->id);
	
		$query = "DELETE FROM notes where id = '$id'";
	
		$result = $sqlCon->query($query);

		return $result;
	
	}
}