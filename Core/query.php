<?php

require __DIR__ . "/Connect.php";

abstract class query extends MySQL{
	

	protected $sql;
	protected $result;

	public function SQLLogin($email, $password){
		
		$this->sql = "SELECT * FROM users WHERE email = '".$email."' AND password = '".md5($password)."'";
		return $this->getResult();
	}

	public function SQLValidateEmail($email){
		//digunakan pada validasi email
		$this->sql = "SELECT * FROM users WHERE email = '".$email."'";
		return $this->getResult();
	}

	public function SQLRegister($name, $email, $password){
		// digunakan pada proses register 
		$this->sql = "INSERT INTO users(name, email, password)"."VALUES ('".$name."', '".$email."', '".md5($password)."')";
		return $this->getResult();
	}

	public function getResult(){
		$this->result = $this->query;
		return $this;
	}

	public function FetchArray(){
		//digunakan untuk memasukan data dalam database
		$row = $this->result->fetch_array();
		return $row;
	}
}

?>