<?php

class Login extends Controller{
    
    public function index()
    {
      $data['user'] = $this->model('UserModel')->getUser();
      $this->view('login/index', $data);
    }
  
 
    function login_process($user,$pass)
    {
        $row = $this->db->prepare('SELECT * FROM tbl_user WHERE username=? AND password=md5(?)');
        $row->execute(array($user,$pass));
        $count = $row->rowCount();
        if($count > 0)
        {
            $hasil = $row->fetch();
            $_SESSION['ADMIN'] = $hasil;

            return "sucsess";
        }else{

        
            return "failed";
        }

    }
    public function action(){
    if(!empty($_GET['aksi'] == 'login'))
    {   
        session_start();

        $user = strip_tags($_POST['user']);
        $pass = strip_tags($_POST['pass']);

        $result = $proses->login_process($user,$pass);

        if($result == 'sukses')
        {
            echo "<script>window.location='../index.php';</script>";
        }
        else
        {
            echo "<script>window.location='../login.php?get=gagal';</script>";
        }
    }
}
}
?>