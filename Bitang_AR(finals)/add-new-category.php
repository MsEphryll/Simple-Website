<?php
  include "templates/conn.php";

  $sql = "INSERT INTO product_type (p_type) VALUES ('". $_POST['categoryName'] ."')";

  if (mysqli_query($conn, $sql)) {
    header("Location: products.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

header("Location:regproductform.php");
?>