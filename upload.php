<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// check if image file is an actual image of fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not image.";
    $uploadOk = 0;
  }
}

// check if file already exist
if(file_exists($target_file)) {
  echo "Sorry, file already exist.";
  $uploadOk = 0;
}

// Check file size
if(){}

?>