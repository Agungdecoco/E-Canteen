<?php
class login{
	private $username = "ana99";
	private $email = "nadiana@young.com";
	private $password = "anafrozen";

	protected $inputUsername;
	protected $inputEmail;
	protected $inputPassword;

	public function __construct($inputUsernama, $inputEmail, $inputPassword){
		$this->inputUsername = $inputUsername;
		$this->inputEmail = $inputEmail;
		$this->inputPassword = $inputPassword;
	}

	public function signIn(){
		if($this->inputUsername === $this->username AND $this->inputEmail === $this->email AND $this->inputPassword === $this->password){
			echo "Successful!";
		}else{
			echo "Try Again, wrong inputUsername or inputEmail or inputPassword!";
		}
	}
}

$inputUsername = "ana99";
$inputEmail = "nadiana@young.com";
$inputPassword = "anafrozen";

$login = new login($inputUsername, $inputEmail, $inputPassword);
$login->signIn();
?>