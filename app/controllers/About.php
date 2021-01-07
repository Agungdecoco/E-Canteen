<?php

/**
 *
 */
class About extends Controller
{

  public function index($nama = 'Agung', $pekerjaan = 'Mahasiswa'){
    $data['nama'] = $nama;
    $data['pekerjaan'] = $pekerjaan;
    $data['title'] = 'About';
    $this->view('templates/header', $data);
    $this->view('about/index', $data);
    $this->view('templates/footer', $data);
  }

  public function page(){
    $data['title'] = 'Page';
    $this->view('templates/header', $data);
    $this->view('about/page');
    $this->view('templates/footer', $data);
  }

}


?>
