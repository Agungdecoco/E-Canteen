<?php
class forgotPassword {

    protected $inputEmail;

    private $email = "boy@yahoo.com";

    public function __construct($inputEmail) {
        $this->inputEmail = $inputEmail;
    }
    
    public function send() {
        if ($this->inputEmail === $this->email) {
            print "Berhasil";
        } else {
            print "Gagal";
        }
    }
}

$inputEmail = "boy@yahoo.com";

$forgotPassword = new forgotPassword($inputEmail);
$forgotPassword->send();

?>