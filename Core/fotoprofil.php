<?php
class profileImage{
private $uploadPhoto;
private $inputSize;

	public function __construct($uploadPhoto, $uploadPhoto){
		$this->uploadPhoto = $uploadPhoto;
		$this->inputSize = $inputSize;
	}
	public function upload(){
		if($this->inputSize < 500000){
			echo "successful!";
		}else{
			echo "failed!";
		}
	}
}

$uploadPhoto = "ABC";
$inputSize = "5000";
uploadPhoto
$profileImage = new profileImage($uploadPhoto, $inputSize);
$profileImage->upload();
?>