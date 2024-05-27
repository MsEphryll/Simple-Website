<?php  
  echo "<div class='filter-bg' style='overflow-x:auto;' >";
  echo "<table class='table' >";
  echo "<tr><th></th><th>Product</th><th>Price</th><th>Category</th><th>Description</th><th></th></tr>";

    //  loop the data
    while($row = mysqli_fetch_assoc($result)) {
      echo "<tr>";

      if ($row['img'] == NULL || !file_exists('images/products/' . $row['img'])) {
        echo "<td><img src='images/products/default.jpg' width='50' height='50'></td>";
      } else {
          echo "<td><img src='images/products/" . $row["img"] . "' width='50' height='50'></td>";
      }

      echo "<td><strong>" . $row["product_name"] . "</strong><br><small>Product ID: " . $row["id"] . "</small><br>";

      if ($row["qty"] == 0){
        echo "<p class='text-body-tertiary'><a class='dropdown-item' href='product-status.php?id=" . $row['id'] . "'><img src='assets/icons/disable.png' alt='edit' style='hieght:25px; width:25px;'>Disabled</a></p>";
      } else{
        if ($row["available"] == 0) {
          echo "<p class='text-body-tertiary'><a class='dropdown-item' href='product-status.php?id=" . $row['id'] . "'><img src='assets/icons/disable.png' alt='edit' style='hieght:25px; width:25px;'>Disabled</a></p>";
        } else {
          echo "<p class='text-success'><a class='dropdown-item' href='product-status.php?id=" . $row['id'] . "'><img src='assets/icons/enable.png' alt='edit' style='hieght:25px; width:25px;'>In Stock</a></p>";
        }
      }
      echo "</td>";

      $number = number_format($row['price'],2,'.',',');
       echo "<td><div>
          <h3><strong>₱" . $number . "</strong></h3>
        </div></td>";

      echo "<td>" . $row['p_type'] . "</td>";

      echo "<td><div class='description-scroll'>" . $row['pdescription'] . "</div></td>";

      echo "<td>";

      // actions
      echo "<div class='options'>";
      echo '<ul class="nav nav-pills flex-column">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"></a>
                <div class="dropdown-menu" style="">
                  <h6 class="dropdown-header">Actions</h6>

                  <a class="dropdown-item" href="viewproducts.php?id=' . $row["id"]. '"><img src="assets/icons/view.png" alt="view" style="hieght:25px; width:25px;">View Product</a>

                  <a class="dropdown-item" href="update_product.php?id=' . $row['id'] . '"><img src="assets/icons/edit.png" alt="edit" style="hieght:25px; width:25px;">Edit Product</a>

                  <a class="dropdown-item" href="#" onclick="confirmDelete(' . $row['id'] . ')">Delete this product</a>
                </div>
              </li>
            </ul>';
        echo "</div>";
      echo "</td>";

      echo "</tr>";
    }


  echo "</table>";
  echo "</div>";

  ?>

<script>
    // JavaScript function to confirm deletion
    function confirmDelete(productId) {
        if (confirm("Are you sure you want to delete this product?")) {
            window.location.href = "delete_product.php?id=" + productId;
        }
    }
</script>