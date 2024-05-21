<?php
include "templates/conn.php";

$sql = "UPDATE 
              products 
        SET 
              product_name='" . $_POST['pName'] . "', 
              pdescription='" . $_POST['description'] . "', 
              qty='" . $_POST['qty'] . "', 
              price='" . $_POST['price'] . "' 
        WHERE 
              id=" . $_POST['pid'];


if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
header('Location: products.php');

?>