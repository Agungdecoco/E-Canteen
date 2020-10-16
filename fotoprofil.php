<?php
class FotoProfil{
private $uploadphoto;
private $inputsize;

public function __construct($uploadphoto, $inputsize){
	$this->uploadphoto = $uploadphoto;
	$this->inputsize = $inputsize;
}
public function upload(){
	if($this->inputsize < 500000){
		echo "successful!";
	}else{
		echo "failed!";
	}
}
}

$uploadphoto = "ABC";
$inputsize = "5000";

$profil = new profil($uploadphoto, $inputsize);
$profil->upload();
?>