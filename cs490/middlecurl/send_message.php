<?php

$userId = $_POST['userId'];
$toId = $_POST['toId'];
$message = $_POST['message'];
  $ch = curl_init();
  
  curl_setopt($ch, CURLOPT_URL, "http://localhost/cs490/backend/load_chat.php");
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, "userId=$userId&toId=$toId&message=$message");

  $result = curl_exec($ch);
  
  curl_close($ch);

?>