<?php

    require '../classes/adminDAO.php';
    $display = new Userdisplay;
    $displaylist = $display->displayUser();

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
    <title>Admin Page</title>
</head>
<body>
<div class="container mt-5">
    <table class="table table-bordered table-hover text-center">
        <thead class="thead">
            <th>USER ID</th>
            <th>USER NAME</th>
            <th>USER E-mail</th>
            <th>TOTAL PICS UPLOADED</th>
            <th>TOTAL VOTES</th>
            <th colspan="1">Detail</th>
            <!-- TOTAL PICS ％ TOTAL PICS UPDATE -->
        </thead>
        <tbody class="">
              <?php foreach($displaylist as $key=>$value){?>
                <tr>
                    <td><?php echo $value['user_id'];?></td>
                    <td><?php echo $value['user_name'];?></td>
                    <td><?php echo $value['user_email'];?></td>
                    <td><?php echo $value['totalpics'];?></td> 
                    <td><?php echo $value['totalvote'];?></td>
                    <td><a href='userpage.php?id=<?php echo $value['user_id']; ?>' role='botton' class='btn btn-dark btn-block'><i class="far fa-file-alt"></i></a></td>
                </tr>
                <?php }?>
            </tbody>
    </table>
</div> 
</body>
</html>