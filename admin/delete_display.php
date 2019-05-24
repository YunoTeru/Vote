<?php

    ini_set( 'display_errors', 1 );
    require '../classes/userpageDAO.php';
    $display = new Userpage;
    $displaylist = $display->getSingleDisplay($_GET['id']);
    $userlist = $display->retrieveALLUser();

    // if(isset($_POST['upload'])){
    //     $user_name = $_POST['user_name'];
    //     $display_name = $_POST['display_name'];
    //     $display_user = $_POST['display_user'];
    //     $display_img = $_FILES['display_img']['name'];
    //     $tmp_file_name = $_FILES['display_img']['tmp_name'];
    //     $directory = "images/";
    //     $result = $display->addDisplay($user_name, $display_name, $display_user, $display_img, $tmp_file_name, $directory);
    // }
    
    if(isset($_POST['submit'])){
        $confirm  = $_POST['confirm'];
        if($confirm == 'delete'){
            $display->deleteDisplay($_GET['id']);
            header('Location: userpage.php?id='.$_GET['id']);
        }else{
            header('Location: userpage.php?id='.$_GET['id']);
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
    <title>DELETE</title>
    <style type="text/css">

    </style>

</head>
<body>
    <div class="conteainer">
        <div class="card border-danger m-3 p-3">
            <h4 class="card-title">Are you sure you`re going to delete this product?</h4>
            <p class="card-text">Please type 'delete' if you are sure. If not, type 'cancel'</p>
                Details <br>
                Display Name: <?php foreach($displaylist as $key=>$value){ echo $value['display_name']; }?><br>
                Display Votes: <?php  echo $value['display_vote']; ?><br>
                User Name: <?php echo $value['user_name']; ?><br>
            </p>
             
            <form method="post">
                <div class="form-group">
                    <label for="">Type Here:</label>
                    <input type="text" name="confirm" id="" class="form-controle">
                </div>
                <input type="submit" value="Submit" name="submit" class="btn btn-danger text-white">
            </form>
        </div>
    </div>
</body>
</html>