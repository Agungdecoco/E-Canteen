<?php

require __DIR__ . "/LoginController.php";
session_start();
if(isset($_POST['submit'])){
	$login = new LoginController;
	if(!empty($_POST['remember'])){
		$remember = $_POST['remember'];
	}else{
		$remember = NULL;
	}
	$login->getData($_POST['email'], $_POST['password'], $remember);
}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Halaman Login</title>
        <link rel="stylesheet" href="style.css">
    </head>
   
    <body>
        <div class="container">
          <h1>Login</h1>
            <form>
                <label>Username</label><br>
                <input type="text"><br>
                <label>Password</label><br>
                <input type="password"><br>
                <button>Log in</button>
            </form>
        </div>     
    </body>
</html>