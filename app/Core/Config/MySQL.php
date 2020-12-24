<?php
require __DIR__ . "/ConfigDB.php";

class MySQL
{
	use ConfigDB;

	private $conn = null;
	public $status = false;
	public $errorMassage = null;

	function __construct() {
		$this->conn = $this->connectDB();
	}

	function connectDB() {
		$conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
		$this->checkConnection();
	}

	function checkConnection() {
		if ($this->conn->connect_error) {
					 $this->status = false;
					 $this->errorMessage = $this->connection->connect_error;
			 } else {
					 $this->status = true;
			 }
	}

	public function closeConnection(){
		if ($this->conn) {
			$this->conn->close();
		}
	}

}

// class DBController extends MySQL {
//
// 	public function runQuery($query) {
// 		$result = mysqli_query($this->conn,$query);
// 		while($row=mysqli_fetch_assoc($result)) {
// 			$rows[] = $row;
// 		}
// 		if(!empty($rows))
// 			return $rows;
// 	}
//
// }
?>
