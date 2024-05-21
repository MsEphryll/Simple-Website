<?php
include "templates/conn.php";

// Get form data and escape special characters
$pName = $_POST['pName'];
$dcrption = mysqli_real_escape_string($conn, $_POST['dcrption']); // Escape special characters
$qty = $_POST['qty'];
$price = $_POST['price'];
$available = 1;
$type = $_POST['type'];

// Prepare SQL statement
$sql = "INSERT INTO products (product_name, pdescription, qty, price, available, pt_id) VALUES ('$pName', '$dcrption', $qty, $price, $available, $type)";

// Execute SQL query
if (mysqli_query($conn, $sql)) {
    echo "Product registered successfully.";
} else {
    echo "Error: " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);

header("Location:products.php");
?>


