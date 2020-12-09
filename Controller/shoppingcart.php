<?php
session_start();
require_once("dbcontroller.php");
$dbcontrol = new DBController();

interface Cart
{
	public function action($dbcontrol);
}

class addItem implements Cart
{
	public function action($dbcontrol)
	{
		if(!empty($_POST["quantity"])) {
			$productByCode = $dbcontrol->runQuery("SELECT * FROM product WHERE code='" . $_GET["code"] . "'");
			$itemArray = array($productByCode[0]["code"]=>array('name'=>$productByCode[0]["name"], 'code'=>$productByCode[0]["code"], 'quantity'=>$_POST["quantity"], 'image'=>$productByCode[0]["image"], 'price'=>$productByCode[0]["price"]));

			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode[0]["code"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode[0]["code"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
							}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}
	}
}

class removeItem implements Cart
{
	public function action($dbcontrol)
	{
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_GET["code"] == $k)
						unset($_SESSION["cart_item"][$k]);
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	}
}

class emptyItem implements Cart
{
	public function action($dbcontrol)
	{
		unset($_SESSION["cart_item"]);
	}
}
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	case "add":
		$add = new addItem();
		echo $add->action();
	break;
	case "remove":
		$remove = new removeItem();
		echo $remove->action();
	break;
	case "empty":
		$empty = new emptyItem();
		echo $empty->action();
	break;
}
}
?>
