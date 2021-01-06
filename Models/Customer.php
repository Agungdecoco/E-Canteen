<?php
  declare(strict_types=1);

  $path = dirname(__DIR__, 1);
  $path = 'Models/UserModel.php';
  require_once $path;

  class Customer extends User {

    public $username=;
    public $password=;

    public function setUserName($username) {
        $this->username = $username;
    }

  public function setPassword($password) {
        $this->password = $password;
    }

    public function getUserName() {
        return $this->username;
    }

    public function getPassword() {
        return $this->password;
    }
  }
?>
