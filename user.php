<?php

require __DIR__ . "/../Core/dbcontroller.php";

<<<<<<< HEAD
class user extends dbcontroller {

	public function insert($user)
	{
		$stmt = $this->connection->prepare("INSERT INTO `user` (`email`, `name`, `password`, `telephone') VALUES (?, ?, ?, ?)");

		$email = $user->getEmail();
        $name = $user->getName();
        $password = $user->getPassword();
        $created = $user->getTelephone();

        $stmt->bind_param("amal", $email, $name, $password, $telephone);

        $process = $stmt->execute();

        if ($process) {
            $stmt->close();
            return true;
        }
        $stmt->close();
        return false;

	}
}

require _DIR_ . "/../Models/UserModel.php";
	$user = new User();
    $user->setName("Dira");
    $user->setEmail("Dira@gmail.com");
    $user->setPassword("diracantik");
    $user->setTelephone("081234"());

    $process = user::insert($user);

    if ($process) {
        print_r("Success.");
    } else {
        print_r("Failed.\n");
    }
=======
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
>>>>>>> b7568e8d590ab3fa1ba9c8e582f027e73bd712a8
