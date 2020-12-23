<?php
require __DIR__ . "/ConfigurasiDatabase.php";

abstract class MySQL
{
	use configuration;

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
