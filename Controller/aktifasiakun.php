<?php

class activateAcc {
	private $email = 'si@student.uinsby.ac.id';
    private $token = 'qwerty1234';
    
    protected $inputEmail, $inputToken;
    
	public function __construct($inputEmail, $inputToken) {
		$this->inputEmail = $inputEmail;
		$this->inputToken = $inputToken;
    }
    
    public function isValid() {
		if ($this->inputEmail === $this->email AND $this->inputToken === $this->token) {
			echo "Success";
		} else {
			echo "Fail";
		}
    }
}


$activateAcc1 = new activateAcc("si@student.uinsby.ac.id","qwerty1234");
$activateAcc2 = new activateAcc("tf@student.uinsby.ac.id","qwe123");
echo " akun anda" . $activateAcc1->isValid();
echo "<br>";
echo " akun anda" . $activateAcc2->isValid();
?>