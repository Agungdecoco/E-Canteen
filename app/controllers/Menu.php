<?php 

class Menu extends Controller{
	public function index()
	{
		$data['judul'] = 'Daftar Menu';
		$data['mn'] = $this->model('Menu_model')->getAllMenu();
		$this->view('templates/header', $data);
		$this->view('menu/index', $data);
		$this->view('templates/footer');
	}

	public function detail($id)
	{
		$data['judul'] = 'Detail Menu';
		$data['mn'] = $this->model('Menu_model')->getMenuById($id);
		$this->view('templates/header', $data);
		$this->view('menu/detail', $data);
		$this->view('templates/footer');
	}

public function tambah()
{
	if ( $this->model("Menu_model")->tambahDataMenu($_POST) > 0 ) {
		Flasher::setFlash('berhasil', 'ditambahkan', 'success');
		header('Location: ' . BASEURL . '/menu');
		exit;
	} Flasher::setFlash('gagal', 'ditambahkan', 'success');
		header('Location: ' . BASEURL . '/menu');
		exit;
}





public function hapus($id)
{
	if ( $this->model("Menu_model")->hapusDataMenu($id) > 0 ) {
		Flasher::setFlash('berhasil', 'dihapus', 'success');
		header('Location: ' . BASEURL . '/menu');
		exit;
	} else {
		Flasher::setFlash('gagal', 'dihapus', 'danger');
		header('Location: ' . BASEURL . '/menu');
		exit;
	}
}
	
// ///////////////////////
	public function getubah()
	{
		echo json_encode($this->model('Menu_model')->getMenuById($_POST['id']));
	}

	public function ubah()
	{
		if ( $this->model("Menu_model")->ubahDataMenu($_POST) > 0 ) {
		Flasher::setFlash('berhasil', 'diubah', 'success');
		header('Location: ' . BASEURL . '/menu');
		exit;
	} Flasher::setFlash('gagal', 'diubah', 'success');
		header('Location: ' . BASEURL . '/menu');
		exit;	
	}
// ///////////////////////
	public function cari()
	{
		$data['judul'] = 'Daftar Menu';
		$data['mn'] = $this->model('Menu_model')->cariDataMenu();
		$this->view('templates/header', $data);
		$this->view('menu/index', $data);
		$this->view('templates/footer');
	}

}