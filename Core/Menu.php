<?php

class Menu {
	
	private $id;
	private $namabarang;
	Private $harga;

public function getId()
{
	return $this->id;
}
public function getNamabarang()
{
	return $this->namabarang;
}
public function getHarga()
{
	return $this->harga;
}
public function setId($id)
{
	$this->id = $id;
}
public function setNamabarang($namabarang)
{
	$this->namabarang = $namabarang;
}
public function setHarga($harga)
{
	$this->harga = $harga;
}
}
?>