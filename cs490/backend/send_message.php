<?php

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'socialnetwork');

$userId = $_POST['userId'];
$toId = $_POST['toId'];
$message = $_POST['message'];
$query = "INSERT INTO `messages` (`id`, `fromId`, `toId`, `message`) VALUES (NULL, '$userId', '$toId', '$message');";

mysqli_query($db, $query);

echo 'Success';
?>