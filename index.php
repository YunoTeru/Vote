<?php

    session_start();
    require 'classes/userDAO.php';
    $userdao = new UserAccessObject;

    if(isset($_POST['login'])){
        
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        
        $login = $userdao->login($email, $password);
        
        if(!empty($login)){
            $_SESSION['id'] = $login['user_id'];
            $_SESSION['name'] = $login['user_email'];
            $_SESSION['logstat'] = "Active";
            header('Location: home.php');

        }else{
            echo "USER NOT FOUND!";
        }
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
    <title>Login</title>
    <style type="text/css">

    .form{
        border-style: ridge;
        padding: 0px 50px;
        width:60%;
        height: auto;                                          
        margin: 20px auto 20px auto;
        margin-top: 100px;
        background-color: #ECECEC;
    }

    #contacth2{ 
        font-size: 50px;
        padding-top: 20px;
        font-family: 'Great Vibes', cursive;
    }
       
    

    .send{
        text-align: center;
    }

    input{
        width: 400px;
        padding: 20px;
        font-size: 20px;
    }

    form{
        padding: 20px;
    }

    textarea{
        width: 400px;
        padding: 20px;
        height: 100px;
    }

    input#submit{

        /*width: 200px;*/
        margin-top: 50px;
        color: white;
        text-shadow: 1px 1px 0px black;
        border: 3px solid gray;
        background-color: #5B5B5B;
        padding: 10px;
        width: 450px;
    }

        input#submit:hover{

        color: white;
        border-top: 2px solid #ABA9A9;
        background-color: #444444;

        }
        .body{
            background-color: grey;
        }

    </style>

</head>
<body>
    <div class="form">
		<div class="login text-center" >
			<h1 id="contacth2">Login</h1>
        <form method="post">
		<dl>
			<dt><label for="q1">E-mail</label></dt>
			<dd><input type="email" name="email" id="q1"  size="50" placeholder="○○○@○○○.com" required></dd>
			<dt><label for="q2">Password</label></dt>
			<dd><input type="password" name="password" id="q2" size="30" placeholder="○○○○○○○○" required></dd>
		</dl>
		<input type="submit" name="login" value="Login" id="submit"><br>
		<a href="register.php">Register is here</a>
	</form>
		</div>
	</div>
</body>
</html>