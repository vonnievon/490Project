<?php


$target_dir = "../../cs490/images/uploads/";

$filename=basename($_FILES["myFile"]["name"]);
$target_file = $target_dir . basename($_FILES["myFile"]["name"]);;
echo $target_file;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
  $check = getimagesize($_FILES["myFile"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["myFile"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["myFile"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["myFile"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}


if($filename=="filename"){
$target_dir="";
}
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'socialnetwork');
$userId = $_POST['userId'];
$post = $_POST['post'];
$src = mysqli_real_escape_string($db,$target_file);
if($src=="../test/images/uploads/"){
$src="";	
}

echo $src;
$query = "INSERT INTO `posts` (`id`, `userId`, `post`, `date`, `src`) VALUES (NULL, '$userId', '$post', '','$src')";

mysqli_query($db, $query);

echo 'Success';
?>