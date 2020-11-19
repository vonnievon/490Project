<?php

$userId = $_POST['userId'];
  $ch = curl_init();
  
  curl_setopt($ch, CURLOPT_URL, "http://localhost/cs490/middlecurl/load_messages.php");
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, "userId=$userId");

  $result = curl_exec($ch);
  
  curl_close($ch);

?>