<?php
class changePassword {

    private $inputPassword;
    private $newPassword;
    private $confirmPassword;

    public function __construct($password, $newPassword) {
        $this->password = $password;
        $this->newPassword = $newPassword;
    }

    public function isValid() {
        if ($this->inputPassword == $this->password) {
            return true;
        } else {
            return false;
        }
    }

    public function save() {
        if (strlen($newPassword) >= 8) {
            if ($newPassword == $confirmPassword) {
                return true;
            } else {
                return false;
            }
        } else {
           return false;
        }
    }
}

$password = "bismillah";
$inputPassword = "bismillah";
$newPassword = "alhamdulillah";
$confirmPassword = "alhamdulillah";

$changePassword = new changePassword($inputPassword, $newPassword, $confirmPassword);
$changePassword->save();
?>
