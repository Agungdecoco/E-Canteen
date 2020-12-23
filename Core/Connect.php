<?php

require __DIR__ . "/Core/ConfigDB.php";

abstract class MySQL
{
	use configDB;

	public $conn = null;
	public $status = false;
	public $errorMassage = null;

	function __construct() {
		$this->connectDB();
	}

	function connectDB() {
		$this->conn = new mysqli($this->HOSTNAME,$this->USERNAME,$this->PASSWORD,$this->DBNAME,$this->PORT);
		$this->connectDB;
	}

	function checkConnection() {
		if ($this->conn->connect_error) {
					 $this->status = false;
					 $this->errorMessage = $this->connection->connect_error;
			 } else {
					 $this->status = true;
			 }
	}

	abstract public function runQuery($query);
}

class DBController extends MySQL {

	public function runQuery($query) {
		$result = mysqli_query($this->conn,$query);
		while($row=mysqli_fetch_assoc($result)) {
			$rows[] = $row;
		}
		if(!empty($rows))
			return $rows;
	}

}
?>
