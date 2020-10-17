<?php

class aktifasiakun {
	private $email_tersedia = 'si@student.uinsby.ac.id';
    private $token_tersedia = 'qwerty1234';
    
    protected $masukkan_email, $masukkan_token;
    
	public function __construct($masukkan_email, $masukkan_token) {
		$this->masukkan_email = $masukkan_email;
		$this->masukkan_token = $masukkan_token;
    }
    
    public function getValid() {
		if ($this->masukkan_email === $this->email_tersedia AND $this->masukkan_token === $this->token_tersedia) {
			echo "Sukses";
		} else {
			echo "Gagal";
		}
    }
}
$aktifasiakun1 = new aktifasiakun("si@student.uinsby.ac.id","qwerty1234");
$aktifasiakun2 = new aktifasiakun("tf@student.uinsby.ac.id","qwe123");
echo " akun anda" . $aktifasiakun1->getValid();
echo "<br>";
echo " akun anda" . $aktifasiakun2->getValid();
?>