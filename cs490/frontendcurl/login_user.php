<?php

  $username = $_POST['username'];
  $password = &$_POST['password'];
  
  $ch = curl_init();
  
  curl_setopt($ch, CURLOPT_URL, "http://localhost/cs490/middlecurl/login_user.php");
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, "username=$username&password=$password");

  $result = curl_exec($ch);
  
  curl_close($ch);
  
?>