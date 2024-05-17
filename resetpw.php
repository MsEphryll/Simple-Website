<?php
include "templates/conn.php";

$sql = "UPDATE users SET pWord='password' WHERE id=" . $_GET["id"];

mysqli_query($conn, $sql);
mysqli_close($conn);

header('Location: users.php');

?>