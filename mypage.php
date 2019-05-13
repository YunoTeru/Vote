<?php  
	// session_start();

	// include_once 'connection.php';

	// if(!isset($_SESSION['user'])) {
	//   header('Location: index.php');
	// }

	// $query = "SELECT * FROM user WHERE user_id=".$_SESSION['user']."";// ユーザーIDをキーにDBからユーザー情報を取得

	// $result = $mysqli->query($query);

	// if (!$result) {
	//   print('query failed' . $mysqli->error);
	//   $mysqli->close();
	//   exit();
	// }

	// while ($row = $result->fetch_assoc()) {
	//   $username = $row['username'];
	//   $email = $row['email'];
	  
	// }

	// $result->close();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>My page</title>
</head>
<body>

<h1>Profile</h1>
<ul>
  <li>Name：<?php echo $username; ?></li>
  <li>E-mail：<?php echo $email; ?></li>
</ul>
<a href="logout.php?logout">Logout</a>
<a href="logout.php?logout&delete" onclick="window.alert('Are you sure?');">Cancel the membership</a>
</body>
</html>
