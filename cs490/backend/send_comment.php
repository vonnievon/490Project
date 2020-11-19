<?php

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'socialnetwork');

$userId = $_POST['userId'];
$postId = $_POST['postId'];
$comment = $_POST['comment'];
$query = "INSERT INTO `comments` (`id`, `postId`, `fromId`, `comment`) VALUES (NULL, '$postId', '$userId', '$comment');";

mysqli_query($db, $query);

echo 'Success';
?>