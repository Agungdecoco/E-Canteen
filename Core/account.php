<?php

class account{

	private $id;
	private $name;
	private $email;
	private $password;
	private $saldo;

public function getid()
{
	return $this->id;
}
public function getname()
{
	return $this->name;
}
public function getemail()
{
	return $this->email;
}
public function getpassword()
{
	return $this->password;
}
public function setid()
{
	$this->id = $id;
}
public function setname()
{
	$this->name = $name;
}
public function setemail()
{
	$this->email = $email;
}
public function setpassword()
{
	$this->password = $password;
}
public function save()
{
	if ($this->isSave()){
		echo "Account already!";
	} else {
		echo "Account not ready!";
	}
}
public function delete()
{
	if ($this->isdelete()){
		echo "Account has been delete.";
	} else {
		echo "Delete failed.";
	}
}
public function setsaldo()
{
	$this->saldo = $saldo;
}
public function getsaldo()
{
	return $this->saldo;
}
}

?>
