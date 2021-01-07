<?php

/**
 *
 */
class Product extends Controller
{
  public function index()
  {
    $data['title'] = 'Daftar Produk';
    $data['produk'] = $this->model('ProductModel')->getProduct();
    $this->view('templates/header', $data);
    $this->view('product/index', $data);
    $this->view('templates/footer');
  }

  public function detail($id)
  {
    $data['title'] = 'Detail Produk';
    $data['produk'] = $this->model('ProductModel')->getProductById($id);
    $this->view('templates/header', $data);
    $this->view('product/detail', $data);
    $this->view('templates/footer');
  }

  public function addItem()
  {
    if ($this->model('ProductModel')->addDataItem($_POST) > 0) {
      header('Location: '.MAINURL.'/product');
      exit;
    }
  }

  public function deleteItem($id)
  {
    if ($this->model('ProductModel')->deleteDataItem($id) > 0) {
      header('Location: '.MAINURL.'/product');
      exit;
    }
  }
}

?>
