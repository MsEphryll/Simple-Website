<?php 
include 'templates/conn.php';

$sql = "INSERT INTO products (product_name, pdescription, qty, price, available) VALUES ('". $_POST['pName'] ."', '". $_POST['dcrption'] ."', '". $_POST['qty'] ."', '". $_POST['price'] ."', 1)";

mysqli_query($conn, $sql);

// if (mysqli_query($conn, $sql)) {
//     header("Location:products.php");
// } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }

mysqli_close($conn);
header("Location:products.php");
?>
