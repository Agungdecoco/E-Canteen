<?php

/**
 *
 */
class Register extends Controller
{

  public function index()
  {
    $data['user'] = $this->model('UserModel')->getUser();
    $this->view('register/index', $data);
  }

  public function addUser()
  {

    if ($this->model('UserModel')->isEmailReady($_POST) > 0) {
      echo "gagal bosku";
    }
      if ($this->model('UserModel')->addNewUser($_POST) > 0) {
        header('Location: '.MAINURL.'/home');
        exit;
    }
  }

  // public function isEmailhasReady()
  // {
  //   if ($this->Email === $this->EmailhasReady){
  //     return true;
  //   }else{
  //     return false;
  //   }
  // }
}


?>
