<?php
include "templates/conn.php";

$sql = "UPDATE users SET complete_name='". $_POST['cName'] ."', email='". $_POST['email'] ."' WHERE id=" .$_POST['id'];

if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
header('Location: users.php');

?>