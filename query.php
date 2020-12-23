<?php

require 'Connect.php';

class query extends Connect{

	protected $sql;
	protected $result;

	public function SQLLogin($email, $password){
		// digunakan dalam proses login
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
		$this->sql = "INSERT INTO users(name, email, password, created_at)"."VALUES ('".$name."', '".$email."', '".md5($password)."', NOW())";
		return $this->getResult();
	}

	public function getResult(){
		$this->result = $this->dbConn()->query($this->sql);
		return $this;
	}

	public function FetchArray(){
		//digunakan untuk memasukan data dalam database
		$row = $this->result->fetch_array();
		return $row;
	}
}

?>