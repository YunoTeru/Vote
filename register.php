<?php 
	require 'classes/userDAO.php';
	$userdao = new UserAccessObject;
	if(isset($_POST['register'])){
		$user_name = $_POST['user_name'];
		$user_email = $_POST['user_email'];
		$user_password = md5($_POST['user_password']);

		$userdao->registerUser($user_name, $user_email, $user_password);
		header('Location: home.php');
	}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<title>Regiater</title>
</head>
<body>

	<form method="post">
		<dl>
			<dt><label for="q1">Name</label></dt>
			<dd><input type="text" name="user_name" id="q1" size="30" placeholder="○○ ○○"></dd>
			<dt><label for="q2">E-mail</label></dt>
			<dd><input type="email" name="user_email" id="q2"  size="50" placeholder="○○○@○○○.com"></dd>
			<dt><label for="q3">Password</label></dt>
			<dd><input type="password" name="user_password" id="q3" size="30" placeholder="○○○○○○○○"></dd>
		</dl>
		<button type="submit" name="register">Register</button>
		<a href="index.php">Login is here</a>
	</form>
</body>
</html>