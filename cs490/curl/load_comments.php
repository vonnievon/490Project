<?php
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'socialnetwork');
$posts = array();

  	$query = "SELECT * FROM `comments` INNER JOIN users ON comments.fromId = users.id";
	$results = mysqli_query($db, $query);
  	if($results){
	while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {
	$posts[]=(array("username"=>$row["username"],"postId"=>$row["postId"],"comment"=>$row["comment"],));
}
}
echo json_encode($posts);
?>