<?php
class Deletephotoprofil{
private $correctId = "ana99";
private $images;
protected $Id;

public function __construct($Id){
	$this->Id = $Id;
}
public function validation(){
	if($this->Id === $this->correctId){
		return true;
	}else{
		return false;
	}
}

public function delete(){
	if($this->validation()){
		echo "Foto telah dihapus";
	}else{
		echo "Gagal";
	}
}
}

$Id = "ana99";

$Deletephotoprofil = new Deletephotoprofil($Id);
$Deletephotoprofil->delete();
?>	
