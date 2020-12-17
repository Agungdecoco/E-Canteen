<?php

class Menu {
	
	private $id;
	private $NamaBarang;
	Private $harga;

public function getId()
{
	return $this->id;
}
public function getNamabarang()
{
	return $this->NamaBarang;
}
public function getHarga()
{
	return $this->harga;
}
public function setId($id)
{
	$this->id = $id;
}
public function setNamabarang($NamaBarang)
{
	$this->NamaBarang = $NamaBarang;
}
public function setHarga($harga)
{
	$this->harga = $harga;
}
}
?>