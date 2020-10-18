<?php
class signup{
	protected $Name;
	protected $User;
	protected $Email;
	protected $Password;
	private $EmailhasReady = "aliya@gmail.com";

	public function __construct($Name, $User, $Email, $Password){
		$this->Name = $Name;
		$this->User = $User;
		$this->Email = $Email;
		$this->Password = $Password;
	}

	public function isEmailhasReady(){
		if ($this->Email === $this->EmailhasReady){
			return true;
		}else{
			return false;
		}
	}

	public function save(){
		if ($this->isEmailhasReady()){
			echo "Email has Ready";
		}else {
			echo "Success!";
		}
	}
}

$Name = "Aliya";
$User = "aliya01";
$Email = "ali@gmail.com";
$Password = "aliya123";

$signup = new signup($Name, $User, $Email, $Password);
$signup->save();
?>