<?php
include "templates/conn.php";

$sql = "DELETE FROM products WHERE id=" . $_GET["id"];

mysqli_query($conn, $sql);
mysqli_close($conn);

header('Location: products.php');

?>