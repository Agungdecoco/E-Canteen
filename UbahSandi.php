<?php
class UbahSandi {

    private $sandi;
    private $sandibaru;
    private $konfirmasisandi;

    private $sandilama = "bismillah";

    public function __construct($sandilama, $sandibaru) {
        $this->sandilama = $sandilama;
        $this->sandibaru = $sandibaru;
    }

    public function send() {
        if ($this->sandi == $this->sandilama) {
            if (strlen($sandibaru) >= 8) {
              if ($sandibaru == $konfirmasisandi) {
                print "Selamat"
              } else {
                print "Ulangi lagi"
              }
            } else {
              print "Sandi minimal 8 karakter"
            }
        } else {
            print "Maaf sandi tidak bisa diubah";
        }
    }
}

$UbahSandi = new UbahSandi($sandi, $sandibaru, $konfirmasisandi);
$UbahSandi->send();
?>
