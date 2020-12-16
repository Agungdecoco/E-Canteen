<?php
class register{
	protected $inputName;
	protected $inputUsername;
	protected $inputEmail;
	protected $inputPassword;
	private $email = "aliya@gmail.com";
	private $username = "aliya"

	public function __construct($inputName, $inputUsername, $inputEmail, $inputPassword){
		$this->inputName = $inputName;
		$this->inputUsername = $inputUsername;
		$this->inputEmail = $inputEmail;
		$this->inputPassword = $inputPassword;
	}

	public function isEmailhasReady(){
		if ($this->inputEmail === $this->email){
			return true;
		}else{
			return false;
		}
	}

		public function isUsernamehasReady(){
		if ($this->inputUsername === $this->username){
			return true;
		}else{
			return false;
		}
	}


	public function save(){
		if ($this->isEmailhasReady() AND $this->isUsernamehasReady()){
			echo "Email and Username has Ready";
		}else {
			echo "Success!";
		}
	}
}
$inputName = "Aliya";
$inputUsername = "aliya01";
$inputEmail = "ali@gmail.com";
$inputPassword = "aliya123";

$regis = new register($inputName, $inputUsername, $inputEmail, $inputPassword);
$regis->save();
?>