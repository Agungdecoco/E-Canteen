<?php

require __DIR__ . "/../Core/dbcontroller.php";

<<<<<<< HEAD
class User extends dbcontroller {
    public static insert($user)
    {
        $stmt = $this->connection -> prepare("INSERT INTO'user'('email','name','password') VALUES (?,?,?)");

        $email = $user -> getEmail();
        $name = $user -> getName();
        $password = $user -> getPassword();


        $stmt ->bind_param("ofi", $email, $name, $password);

        $process = $stmt -> execute();

        if ($process) {
            $stmt-> close ();
            return true;
        }
        $stmt -> close();
        return false;
    }
}

require __DIR__ . "/../Models/UserModel.php";
        $user = new User();
        $user -> setName("fifi");
        $user -> setEmail("Fifi@yahoo.co.id");
        $user -> setPassword("fifibisa");
        

        $process = user::insert ($user);

        if ($process) {
            print_r("Berhasil.");
        } else {
            print_r("Gagal.\n");
        } 
=======

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
>>>>>>> ff2d57b9128bb6fe212dbbfcae92c8d32033bba8
