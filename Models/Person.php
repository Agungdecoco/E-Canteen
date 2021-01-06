<?php 

/**
 *
 */
class Person extends Account
{
  public $idPerson;
  public $name;
  public $email;
  public $address;

  public function getName(){
    return $this->name;
  }

  public function getEmail(){
    return $this->email;
  }

  public function getAddress(){
    return $this->address;
  }

  public function setName($name){
    $this->name = $name;
  }

  public function setEmail($email){
    $this->email = $email;
  }

  public function setAddress($address){
    $this->address = $address;
  }
}

?>
