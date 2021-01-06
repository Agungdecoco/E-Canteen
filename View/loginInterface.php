<?php

interface loginInterface{
	public function isEmailhasReady();
	
}
class login implements loginInterface{
	private $Email;
	private $Password;
	private $EmailhasReady = "ofi@yahoo.com";

	public function __construct($Email, $Password){
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
			echo "berhasil";
		}else {
			echo "email dan password salah";
		}
	}
}

$Email = "ofi@yahoo.com";
$Password = "ofi111";

$loginInterface = new login($Email, $Password);
$loginInterface->save();
?>