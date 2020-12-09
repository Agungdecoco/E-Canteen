<?php

require __DIR__ . "/../Core/dbcontroller.php";

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