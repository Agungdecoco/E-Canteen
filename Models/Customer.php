<?php
  declare(strict_types=1);

  $path = dirname(__DIR__, 1);
  $path = 'Models/UserModel.php';
  require_once $path;

  class Customer extends User {

    public $customerName="";
    public $customerEmail="";
    public $customerNum="";


    public function setUserName($name) {
        $this->$customerName = $name;
    }

  public function setUserEmail($email) {
        $this->$customerEmail = $email;
    }

    public function setUserName($number) {
        $this->$customerNum = $number;
    }

    public function getUserName() {
        return $this->$customerName;
    }

    public function getUserEmail() {
        return $this->$customerEmail;
    }

    public function getUserNum() {
        return $this->$customerNum;
    }
  }
?>
