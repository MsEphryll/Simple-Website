<?php
include "templates/conn.php";

$sql = "DELETE FROM users WHERE id=" . $_GET["id"];

mysqli_query($conn, $sql);
mysqli_close($conn);

header('Location: users.php');

?>