<?php
class Menu{

public function homepage(){
	if(isset($_GET['page'])) {
		$page = $_GET['page'];
	    switch ($page) {
	    	case "logout":
	    		include "logout.php";
	    		break;
	    	case 'home':
	    		include "home.php";
	    		break;
	    	case 'about':
	    	    include "about.php";
	    	    break;
	    	case 'account':
	    	    include "account.php";
	    	    break;
	    	case 'menulist':
	    	    include "menulist.php";
	    	    break;
	    	default:
	    		echo "Sorry. Page not found!";
	    		break;
	    }
	}
	}
}


$Menu = new Menu();
$Menu-> homepage();

?>

