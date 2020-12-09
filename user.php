<?php

require __DIR__ . "/../Core/dbcontroller.php";

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
