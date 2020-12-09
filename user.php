<?php

require __DIR__ . "/../Core/dbcontroller.php";


class user extends dbcontroller {
	public static function search($email) {
		$stmt = $connection->prepare("SELECT * FROM 'users' WHERE 'email' = ?");

		$stmt->bind_param('amal', $email);

		$stmt->execute();

		return $stmt->get_result();
	}
}
$email = 'nanadiaw@yuhuu.com';
var_dump(user::search($email));