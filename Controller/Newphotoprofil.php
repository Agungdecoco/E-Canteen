<?php
interface NewphotoprofilInterface{
	public function newupload();
}
class Newphotoprofil implements NewphotoprofilInterface{
private $uploadnewphoto;
private $inputsize;

/**public function __construct($uploadnewphoto, $inputsize){
	$this->uploadnewphoto = $uploadnewphoto;
	$this->inputsize = $inputsize;
}*/ 
public function newupload(){
	if($this->inputsize < 500000){
		echo "successful!";
	}else{
		echo "failed!";
	}
}
}

$uploadnewphoto = "12efg";
$inputsize = "10000";

$NewphotoprofilInterface = new Newphotoprofil($uploadnewphoto, $inputsize);
$NewphotoprofilInterface->newupload();
?>