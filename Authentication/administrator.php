<?php
require 'Classes\LogoutController.php';
if(isset($_POST['logout'])){
	$logout = new LogoutController;
	$logout->Logout();
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Administrator</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body class="bg-primary">
	<div class="container">
		<div class="row justify-content-center" style="margin-top: 100px;">
			<div class="col-4">
				<br>
				<form method="post" action="administrator.php">
					<input type="submit" name="logout" value="Logout" class="btn btn-danger btn-block">
				</form>
			</div>
		</div>
	</div>
</body>
</html>