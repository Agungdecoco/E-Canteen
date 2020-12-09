<?php

require __DIR__ . "/dbcontroller.php";

class canteen
{
  public static function search($keyword){
    $search = $this->connection->prepare("SELECT * FROM `seller` WHERE `canteen` = ?")
  }

  $search->bind_param('s', $keyword)

  $process = $search->execute();

  $search->get_result();
}

//Test
$canteen = 'Kantin Bu Jum'
var_dump(canteen::search($canteen))
?>
