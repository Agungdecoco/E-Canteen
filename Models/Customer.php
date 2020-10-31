<?php
  declare(strict_types=1);

  $path = dirname(__DIR__, 1);
  $path = 'UserModel.php';
  require_once $path;

  class Customer extends User {

    public $customerId="";
    public $customerEmail="";

    public function setUserLevel($email, $id) {
        $this->$customerId = $id;
        $this->$customerEmail = $email;
    }

    public function getUserLevel() {
        return $this->$customerId;
        return $this->$customerEmail;
    }
  }
?>
