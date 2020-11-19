
<?php
$userId = $_POST['userId'];
$postId = $_POST['postId'];
$comment = $_POST['comment'];
  $ch = curl_init();
  
  curl_setopt($ch, CURLOPT_URL, "http://localhost/cs490/backend/send_chat.php");
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, "userId=$userId&postId=$postId&comment=$comment");

  $result = curl_exec($ch);
  
  curl_close($ch);

?>