<?php

require __DIR__ . "/Core/query.php";
abstract class LoginController extends query{

	protected $email;
	protected $password;
	protected $username;
	protected $message;

	public function getData($email, $password, $username){
		$this->email = $email;
		$this->password = $password;
		$this->username = $username;

		return $this->validateData();
	}

	public function validateData(){
		if(empty($this->email) || empty($this->password)|| empty($this->username)){
			$this->message = "Email dan Password belum diisi.";
			return $this->message;
			header('location:login.php');
		}else{
			return $this->Login();
		}
	}

	public function Login(){
		$row = $this->SQLLogin($this->email, $this->password, $this->username)->FetchArray();
		if( $row['email'] == $this->email || $row['password'] == md5($this->password) || $row['username'] == $this->username){
			header('location:menu.php');
		}else{
			$this->message = "Email atau Password anda salah.";
			return $this->message;
			header('location:login.php');
		}
	}
}
?>

