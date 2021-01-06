<?php

require __DIR__ . "/ConfigurasiDatabase.php";

class Connect{

	private $conn;
	public $status = false;
	public $errorMassage = null;

	function __construct() {
		$this->conn = $this->connectDB();
	}

	function connectDB() {
		$conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
	}

	function checkConnection() {
		if ($this->conn->connect_error) {
					 $this->status = false;
					 $this->errorMessage = $this->connection->connect_error;
			 } else {
					 $this->status = true;
			 }
	}
}
?>