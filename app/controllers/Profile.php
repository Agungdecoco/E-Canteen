<?php

/**
 *
 */
class Profile extends Controller
{

  public function index()
  {
    $data['title'] = 'My Profile';
    $data['name'] = $this->model('UserModel')->getUser();
    $this->view('templates/header', $data);
    $this->view('profile/index', $data);
    $this->view('templates/footer');
  }

}


?>
