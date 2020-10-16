<?php
class login{
	private $fixUser = "ana99";
	private $fixEmail = "nadiana@young.com";
	private $fixPassword = "anafrozen";

protected $user;
protected $email;
protected $password;

public function __construct($user, $email, $password){
	$this->user = $user;
	$this->email = $email;
	$this->password = $password;
}

public function signIn(){
	if($this->user === $this->fixUser AND $this->email === $this->fixEmail AND $this->password === $this->fixPassword){
	echo "Successful!";
	}else{
		echo "Try Again, wrong user or email or password!";
	}
}}

$user = "ana99";
$email = "nadiana@young.com";
$password = "anafrozen";

$login = new login($user, $email, $password);
$login->signIn();
?>