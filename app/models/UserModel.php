<?php

/**
 *
 */
class UserModel
{

  private $table = 'user';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getUser()
  {
    $this->db->query('SELECT * FROM '.$this->table.' WHERE email=:email');
    return $this->db->resultSet();
  }

  // public function isEmailReady($data){
  //   $query = "SELECT email FROM ".$this->table." WHERE email=:email";
  //
  //   $this->db->query($query);
  //   $this->db->bind('email', $data['email']);
  //
  //   $this->db->execute();
  //
  //   $this->db->rowCount();
  // }

  public function addNewUser($data)
  {
    $query = "INSERT INTO ".$this->table." VALUES ('', :name, :phone_number, :email, :password, :photo_user)";

    $this->db->query($query);
    $this->db->bind('name', $data['name']);
    $this->db->bind('phone_number', $data['phone_number']);
    $this->db->bind('email', $data['email']);
    $this->db->bind('password', $data['password']);
    $this->db->bind('photo_user', $data['photo_user']);

    $this->db->execute();

    return $this->db->rowCount();
  }


}

?>
