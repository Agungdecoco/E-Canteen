<?php
session_start();

 class Logout{
	public function __construct(){
	
  }

 public function logout(){
 session_destroy();

 


echo "Terima kasih Logout Berhasil";

   }
 }

 $logout = new Logout();
 $logout->logout();

 ?>