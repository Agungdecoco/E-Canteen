<?php
  // editor: Subhan Nooriansyah
  // email: subhan.nooriansyah@gmail.com

  abstract class User {

      public $arrayUserId = array();

      abstract public function setUserName($name);
      abstract public function getUserName();
      abstract public function setUserEmail($email);
      abstract public function getUserEmail();
      abstract public function setUserNum($number);
      abstract public function getUserNum();

      public function printUser() {
        print($this->getUserName()."\n");
        print($this->getUserEmail()."\n");
        print($this->getUserNum()."\n");
      }

      public function genUserId() {
        $prefix ="A";
        $suffix;
        $maxValue = 3;
        $userId = 0;

        for ($index=1; $index <= $maxValue; $index++) {
          $suffix =  $index;
          $userId = $prefix.sprintf("%04s",$suffix);
          $this->arrayUserId[$index] = $userId;
        }
        return $this->arrayUserId;
      }

      public function checkParentClass($fileClass) {
        return get_parent_class($fileClass);
      }

      public function checkSubClass($childClass, $parentClass) {
        return is_subclass_of($childClass, $parentClass);
      }
  }
?>