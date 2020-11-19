<?php
  $ch = curl_init();
  
  curl_setopt($ch, CURLOPT_URL, "http://localhost/cs490/middlecurl/load_comments.php");
  curl_setopt($ch, CURLOPT_POST, 1);

  $result = curl_exec($ch);
  
  curl_close($ch);

?>