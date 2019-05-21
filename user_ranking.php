<?php

    require 'classes/rankingDAO.php';
    $ranking = new Ranking;
    $ranklist = $ranking->rankUser();
    $rank = 0;

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
    <title>USER RANKING</title>

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

.upload{
    margin-left: 856px;
}

.thead{
    background-color: #D2D2D2;
}
.tbody{
    background-color:  ;
}

</style>
</head>
<body>
<ul class="topnav">
    <li><a href="home.php">Home</a></li>
    <li><a href="popular.php">Popular</a></li>
    <li><a href="user_ranking.php">User Ranking</a></li>
    <li class="upload"><a href="upload.php">Upload</a></li>
    <li class="mypic"><a href="mypic.php">My Picutures</a></li>
    <li class="logout"><a href="logout.php">Logout</a></li>
    </li>
</ul>

</div>
<div class="container mt-5">
    <table class="table table-bordered table-hover text-center">
        <thead class="thead">
            <th>RANK</th>
            <th>USER NAME</th>
            <th>TOTAL PICS UPLOADED</th>
            <th>TOTAL VOTES</th>
            <th>AVARAGE</th>
            <!-- TOTAL PICS ％ TOTAL PICS UPDATE -->
        </thead>
        <?php foreach($ranklist as $key=>$value){?>
            <tbody class="">
                <tr>
                    <td><?php echo ++$rank;?></td>
                    <td><?php echo $value['user_name'];?></td>
                    <td><?php echo $value['totalpics'];?></td> 
                    <td><?php echo $value['totalvote'];?></td>
                    <td><?php echo $value['totalvote'] / $value['totalpics'];?></td>
                </tr>
            </tbody>
        <?php }?>
    </table>
</div>    
</body>
</html>