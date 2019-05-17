<?php

    session_start();
    $disable = NULL;
    if($_SESSION['logstat'] != "Active"){
        header('Location: index.php');
    }else{
        //echo "Welcome User: ".$_SESSION['name']."<a href='../logout.php'>Logout</a>";
    }
    
    require_once 'classes/homeDAO.php';
   
    $display = new Home;
    $displaylist = $display->getAllDisplay();
    $userlist = $display->retrieveALLUser();

    if(isset($_POST['upload'])){
        $user_name = $_POST['user_name'];
        $display_name = $_POST['display_name'];
        $display_user = $_POST['display_user'];
        $display_img = $_FILES['display_img']['name'];
        $tmp_file_name = $_FILES['display_img']['tmp_name'];
        $directory = "images/";
        $result = $display->addDisplay($user_name, $display_name, $display_user, $display_img, $tmp_file_name, $directory);
    }

    if(isset($_POST['vote'])){
        $display->updateVote($_POST['display_id']);
        setcookie("voted_".$_POST['display_id'], "voted_".$_POST['display_id']);
        header('Refresh:0');
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
    
    <title>HOME</title>
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
    .search{
        margin-top: 8px;
        position: relative;
        left: 1150px;
    }
    .btn{
        background-color: gray;
        color: #fff
        
    }
    
    .btn:hover {
        background-color: #393A37;
    }

    
    .card{
        display: inline-block;
        padding: 10px;
        margin-left: 65px; 
        margin-top: 20px;
    }

    .card-title{
        margin-top: 10px;
    }

    .sb{
        background-color: gray;
    }

    .sb:hover{
        background-color: #393A37;
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
<div class="search mt-3">
    <form action="" method="post">
        <input type="text" class="form-controle" name="search">
        <input type="submit" class="sb btn text-white text-center" name="submit" value="SEARCH">
    </form>
</div>
<div class="container-fuild mt-4">
        <div class="row">
            <?php foreach($displaylist as $key=>$value){?>
                <div class="card bg-light" style="width: 18rem">
                    <img class="card-img-top" src="<?php echo $value['display_img'];?>" alt="Card image cap">
                    <div class="card-body">
                        <i class="fab fa-gratipay">&ensp;<?php echo $value['display_vote'];?></i>
                        <h5 class="card-title"><?php echo $value['display_name'];?></h5>
                        <p class="card-text">User:<?php echo $value['user_name']; ?></p>
                        <form action="" method="post">
                            <input type="hidden" name="display_id" value="<?php echo $value['display_id']; ?>">
                            <?php
                            if($_SESSION['id']==$value['display_user_id']){
                                $disable = "disabled='disabled'";
                            }else{
                                $disable=NULL;
                            }
                            ?>
                            <input type="submit" value="VOTE" name="vote" class="btn btn-block" <?php echo $disable; ?> />
                        </form>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
</body>
</html>