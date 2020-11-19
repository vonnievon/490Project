<?php
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'socialnetwork');
$posts = array();

  	$query = "SELECT posts.id ,posts.post,users.username,posts.src FROM posts INNER JOIN users ON posts.userId = users.id";
  	$results = mysqli_query($db, $query);
  	if($results){
	while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {
	$posts[]=(array("username"=>$row["username"],"id"=>$row["id"],"post"=>$row["post"],"src"=>$row["src"]));
}
}
echo json_encode($posts);
?>