<?php 

class Flasher{

	public static function setFlash($pesan, $aksi, $tipe)
	{
		$_SESSION['flash'] = [
			'pesan' => $pesan,
			'aksi'  => $aksi,
			'tipe'	=> $tipe
		];
	}

	public static function flash()
	{
		if( isset($_SESSION['flash']) ) {
			echo '<div class="alert '. $_SESSION['flash']['tipe'] .'">
  			<span class="closebtn">&times;</span>  
  			Data Menu<strong> '. $_SESSION['flash']['pesan'] .' </strong> '. $_SESSION['flash']['aksi'] .'
		</div>';
		unset($_SESSION['flash']);
		}
	}

}