<?php
class LupaSandi {

    protected $emailanda;
    protected $sandibaru;

    private $Email = "boy@yahoo.com";

    public function __construct($email, $sandibaru) {
        $this->email = $email;
        $this->sandibaru = $sandibaru;
    }
    
    public function send() {
        if ($this->email === $this->Email) {
            print "Berhasil";
        } else {
            print "Gagal";
        }
    }
}

$email = "boy@yahoo.com";
$newEmail = "boy22@yahoo.com";


$LupaSandi = new LupaSandi($email, $newEmail);
$LupaSandi->send();

?>