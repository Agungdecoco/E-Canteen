<?php

session_start();
require_once ("Product.php");
$product = new Product();
$productArray = $product->getAllProduct();

interface cart{
	public function action($productArray);
}

class addItem implements cart{
	public function action($productArray)
	{
		if(!empty($_POST["quantity"])) {
		    $productByCode = $productArray[$_POST["code"]];
		    $itemArray = array($productByCode["code"]=>array('code'=>$productByCode["code"], 'name'=>$productByCode["name"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode["price"]));

			if(!empty($_SESSION["cart_item"])) {
			    $cartCodeArray = array_keys($_SESSION["cart_item"]);
			    if(in_array($productByCode["code"],$cartCodeArray)) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode["code"] == $k) {
							    $_SESSION["cart_item"][$k]["quantity"] = $_SESSION["cart_item"][$k]["quantity"]+$_POST["quantity"];
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

class removeItem implements cart{
	public function action($productArray)
	{
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_POST["code"] == $k)
						unset($_SESSION["cart_item"][$k]);
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	}
}

class emptyItem implements cart
{
	public function action($productArray)
	{
		unset($_SESSION["cart_item"]);
	}
}

if(!empty($_POST["action"])) {
switch($_POST["action"]) {
	case "add":
		$addItem = new addItem();
		echo $addItem->action();
	break;
	case "remove":
		$removeItem = new removeItem();
		echo $removeItem->action();
	break;
	case "empty":
		$emptyItem = new emptyItem();
		echo $emptyItem->action();
	break;
}
}
?>
