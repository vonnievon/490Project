<?php
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'socialnetwork');
$users = array();

  	$query = "SELECT * FROM users";
  	$results = mysqli_query($db, $query);
  	if($results){
	while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {
	$users[]=(array("username"=>$row["username"],"id"=>$row["id"]));
}
}
echo json_encode($users);
?>