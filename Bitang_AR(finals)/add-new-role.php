<?php
  include "templates/conn.php";

  $sql = "INSERT INTO role (role_name) VALUES ('". $_POST['roleName'] ."')";

  if (mysqli_query($conn, $sql)) {
    header("Location: users.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

header("Location:registeruser.php");
?>