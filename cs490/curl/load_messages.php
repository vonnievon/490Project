<?php
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'socialnetwork');
$messages = array();
$userId = $_POST['userId'];

  	$query = "SELECT * FROM messages INNER JOIN users ON messages.fromId = users.id WHERE messages.toId = '$userId'";
  	$results = mysqli_query($db, $query);
  	if($results){
	while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {
	$messages[]=(array("username"=>$row["username"],"message"=>$row["message"]));
}
}
echo json_encode($messages);
?>