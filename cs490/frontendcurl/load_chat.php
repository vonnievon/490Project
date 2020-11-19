
<?php
$userId = $_POST['userId'];
$toId = &$_POST['toId'];
  $ch = curl_init();
  
  curl_setopt($ch, CURLOPT_URL, "http://localhost/cs490/middlecurl/load_chat.php");
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, "userId=$userId&toId=$toId");

  $result = curl_exec($ch);
  
  curl_close($ch);

?>