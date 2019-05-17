<?php

    require 'classes/displayDAO.php';
    session_start();
    $display = new Display;
    //$displaylist = $display->getAllDisplay();
    if(isset($_POST['upload'])){
        $display_name = $_POST['display_name'];
        $display_user_id = $_POST['display_user'];
        $display_img = $_FILES['display_img']['name'];
        $tmp_file_name = $_FILES['display_img']['tmp_name'];
        $directory = "images/";
        $result = $display->addDisplay($display_name, $display_user_id, $display_img, $tmp_file_name, $directory);
        if($result){
            header('Location: upload.php');
        }else{
            echo $result;
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
    <title>UPLOAD</title>
    <style type="text/css"> 

    ul.topnav {
        overflow: hidden;
        margin: 0;
        padding: 0;
        list-style-type: none;
        background-color: #5B5B5B;
    }
    ul.topnav li {
        float: left;
    }
    ul.topnav li a {
        display: block;
        padding: 14px 16px;
        text-align: center;
        text-decoration: none;
        color: white;
    }
    ul.topnav li a:hover:not(.active) {
        background-color: #a9bce2;
    }
    ul.topnav li a.active {
        background-color: #da3c41;
    }

    @media screen and (max-width: 480px) {
        ul.topnav li.right, ul.topnav li {
            float: none;
        }
    }
    .form{
        border-style: ridge;
        padding: 50px;
        width:60%;
        height: auto;                                          
        margin: 20px auto 20px auto;
        margin-top: 50px;
    }

    .contacth2{
        /* font-family: 'Great Vibes', cursive; */
        font-size: 50px;
        margin-top: 50px;
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

    .btn{
        color: white;
        text-shadow: 1px 1px 0px black;
        border: 3px solid gray;
        background-color: #5B5B5B;
        padding: 10px;
        width: 450px;
    }

    .btn:hover{
        color: white;
        border-top: 2px solid #ABA9A9;
        background-color: #444444;
    }

    .sb{
        background-color: gray;
    }

    .sb:hover{
        background-color: black;
    }

    .upload{
        margin-left: 856px;
    }

    </style>
</head>
<body>
<ul class="topnav">
	<li><a href="home.php">Home</a></li>
    <li><a href="popular.php">Popular</a></li>
    <li><a href="#">User Ranking</a></li>
    <li class="upload"><a href="upload.php">Upload</a></li>
    <li class="mypic"><a href="#">My Picutures</a></li>
    <li class="logout"><a href="logout.php">Logout</a></li>
    </li>
</ul>

<div class="send">
		<h2 class="contacth2" >Upload Your File</h2>
		<form class="form" action="" method="post" enctype="multipart/form-data">
			<h4>Title<br>
            <input type="text" name="display_name"   maxlength="30" class="mt-1"><br>
            </h5>
            <h5>
			User Name<br>
            <input type="hidden" name="display_user" value="<?php echo $_SESSION['id']; ?>" maxlength="30" class="mt-1">
            <input type="text" name="display_user_name" value="<?php echo $_SESSION['name']; ?>" maxlength="30" class="mt-1"><br>
            </h5>
            <h5>
            Choose Your File<br>
            <input type="file" name="display_img" class="mt-1">
            </h5>
            <input type="submit" value="UPLOAD" id="submit" name="upload" class="mt-5">
            </h4>
		</form>		
	</div>	
</body>
</html>