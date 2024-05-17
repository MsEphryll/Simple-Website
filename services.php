<?php
include 'templates/header.php';
require 'templates/conn.php';

?>

<br>
<h3>Product List</h3>
<button type="button" class="btn btn-link"><a href="regproductform.php">Add New Products</a></button>


<?php

// sql statement for the table
$sql = "SELECT * FROM products";

$result = mysqli_query($conn, $sql);

echo "<table class='table'>";

  //  loop the data
  while($row = mysqli_fetch_assoc($result)) {

    // product ID and image
    echo "<tr>";
    echo "<td style='vertical-align: top;'><strong>Product ID: " . $row["pid"] . "</strong><br>";

    if ($row['img'] == NULL) {
        echo "<img src='images/products/default.jpg'  width='200' height='200'></td>";
    } else {
        echo "<img src='images/products/" . $row["img"] . "' width='200' height='200'></td>";
    }

    //  product name, price, availability, description
    echo "<td>";
    echo "<div style='margin-top: 10px; margin-left:-150px; width: 500px;'>";
    echo "<h4><strong>" . $row['product_name'] . "</strong></h4>";
    echo "<h5 style='padding-left:20px'>₱" . $row['price'] . "</h5>";

    if ($row["available"] == 0) {
      echo "<p class='text-body-tertiary' style='padding-left:20px'>Sold Out</p>";
    } else {
      echo "<p class='text-success' style='padding-left:20px'>In Stock</p>";
    }

    echo "<div style='text-indent:10px'>" . $row['pdescription'] . "</div>";
    echo "</div>";
    echo "</td>";

    // actions
    echo "<td><a href='#?id=" . $row["id"]. "' class='btn btn-link'>View Product</a><br>";
    echo "<a href='update_product.php?id=" . $row['id'] . "' class='btn btn-link'>Update Product</a><br>";
    echo "<a href='delete_product.php?id=" . $row['id'] . "' class='btn btn-link'>Delete Product</a><br>";

    echo "</td>";

    echo "</tr>";

      }


echo "</table>";

//  close the connection
mysqli_close($conn);
?>

<?php include 'templates/footer.php' ?>