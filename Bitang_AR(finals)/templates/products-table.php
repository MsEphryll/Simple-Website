

<?php

// Loop through the data
while ($row = mysqli_fetch_assoc($result)) {
  echo "<div class='product-item'>";
  echo "<div class='product-item-inner'>";
  // echo "<strong>Product ID: " . $row["id"] . "</strong><br>";

  // image
  echo "<div class='img-space'>";
  if ($row['img'] == NULL || !file_exists('images/products/' . $row['img'])) {
    echo "<img src='images/products/default.jpg' height='100px' width:'100px'>";
  } else {
    echo "<img src='images/products/" . $row["img"] . "' height='250px' width:'250px'>";
  }
  echo "</div>";

  // div for product name and dropdown button
  echo "<div class='name-options'>";
    echo "<div class='product-name'>";
      echo "<h5><strong>" . $row['product_name'] . "</strong></h5>";
    echo "</div>";

    // actions
    echo "<div class='options'>";
      echo '<ul class="nav nav-pills flex-column">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"></a>
                <div class="dropdown-menu" style="">
                  <h6 class="dropdown-header">Actions</h6>
                  <a class="dropdown-item" href="viewproducts.php?id=' . $row["id"] . '">View Product</a>
                  <a class="dropdown-item" href="update_product.php?id=' . $row['id'] . '">Update Product</a>
                  <a class="dropdown-item" href="#" onclick="confirmDelete(' . $row['id'] . ')">Delete this product</a>
                </div>
              </li>
            </ul>';
    echo "</div>";
  echo "</div>";
  // end of the div for product name and dropdown button

  echo "<div>
          <h3>₱" . $row['price'] . "</h3>
        </div>";

  if ($row["qty"] == 0){
    echo "<p class='text-body-tertiary' >Sold Out</p>";
  } else{
    if ($row["available"] == 0) {
      echo "<p class='text-body-tertiary' >Sold Out</p>";
    } else {
      echo "<p class='text-success'>In Stock</p>";
    }
  }

  // description
  echo "<div class='description-scroll'>" . $row['pdescription'] . "</div>";

  echo "</div>"; 
  echo "</div>"; 
}
?>

<script>
    // JavaScript function to confirm deletion
    function confirmDelete(productId) {
        if (confirm("Are you sure you want to delete this product?")) {
            window.location.href = "delete_product.php?id=" + productId;
        }
    }
</script>