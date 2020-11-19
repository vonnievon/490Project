<?php
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'socialnetwork');
// check if login_user is posted
  $username = $_POST['username'];
  $password = $_POST['password'];
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
		$row = mysqli_fetch_array($results, MYSQLI_ASSOC);
  	  $user = new \stdClass();
	  $user->username = $username;
	  $user->id = $row["id"];
	  echo json_encode($user);
  	}else {
  		echo json_encode("No such user found in database");
  	}
?>