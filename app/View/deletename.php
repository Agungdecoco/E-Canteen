<?php
class deletename{
	private $correctid = "aliya01";
	private $name;
	protected $id;

	public function __construct($id){
		$this->id = $id;
	}
	public function validation(){
		if($this->id === $this->correctid){
			return true;
		}else{
			return false;
		}
	}

	public function delete(){
		if($this->validation()){
			echo "Nama tersedia!";
		}else{
			echo "Nama sudah digunakan!";
		}
	}
}

$id = "aliya01";

$deletename = new deletename($id);
$deletename->delete();
?>