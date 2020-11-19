<?php
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'socialnetwork');
$chats = array();
$userId = $_POST['userId'];
$toId = &$_POST['toId'];

  	$query = "SELECT * FROM chats WHERE (fromId = $userId AND toId= $toId) OR (fromId = $toId AND toId= $userId)";
  	$results = mysqli_query($db, $query);
  	if($results){
	while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {
	$chats[]=(array("fromId"=>$row["fromId"],"toId"=>$row["toId"],"message"=>$row["message"],));
}
}
echo json_encode($chats);
?>