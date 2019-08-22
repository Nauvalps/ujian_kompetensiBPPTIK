<?php
/**
* 
*/
class Database {
	private $host;
	private $user;
	private $pass;
	private $db;
	public $connect;
	function __construct($host, $user, $pass, $database) {
		$this->host = $host;
		$this->user = $user;
		$this->pass = $pass;
		$this->db = $database;

		$this->connect = new mysqli($this->host, $this->user, $this->pass, $this->db) or die(mysqli_error());
		if (!$this->connect) {
			return false;
		} else {
			return true;
		}
	}
}

?>