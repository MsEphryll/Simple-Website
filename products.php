<?php
include 'templates/header.php';
include 'templates/conn.php';
?>

<style>
  .body-border {
    background:transparent;
    backdrop-filter: blur(10px);
    padding:30px;
    border-radius:30px;
    margin-top: 15px;
    margin-bottom: 15px;
    box-shadow: 0px 0px 10px #f96863, 0px 0px 10px #f96863 inset;
  }

  .product-container {
    display: flex;
    flex-wrap: wrap;
    gap: 20px; 
  }

  .product-item {
    flex: 0 0 calc(33.33% - 20px);
  }

  .product-item-inner {
    background-color: #ffffff; 
    border-radius: 8px;
    padding: 15px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }

  .img-space {
    width: 350px;
    height: 400px;
    display: flex;
    justify-content: center;
    align-items: center;
    margin:auto;
  }

  .product-item img {
    width: 350px;
    height: auto;
    border-radius: 8px;
    margin-bottom: 15px;
  }

  .name-options {
    display: flex;
    justify-content: space-between; 
  }

  .product-name {
    float:left;
    height: 70px;
  }

  .options {
    float:right;
    margin-top: -10px;
  }

  .sort-n-search {
    display: flex;
    justify-content: space-between; 
  }

  .sorting {
    margin-right:25px;
  }

  .add-sort-search {
    display: flex;
    justify-content: space-between; 
  }
</style>


<div class="body-border">
  <br>
  <h1 style='text-align:center; margin-auto;'><strong>Product List</strong></h1>
  <br><br>

  <div class="add-sort-search">
    <!-- Adding new product -->
    <div style="padding: 10px;">
      <button type="button" class="btn btn-outline-primary">
        <a href="regproductform.php">Add New Products</a>
      </button>
    </div>

  <!-- sort and search div -->
  <div class="sort-n-search">
      <!-- search -->
      <div class="search-product">
        <form class="d-flex" style="width: 100%;">
          <input class="form-control me-sm-2 primary" type="search" placeholder="Search" style="width: 300px;">
          <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>

      <!-- sort -->
      <div class='sorting'>
        <ul class="nav nav-pills flex-column">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="font-size:18px;">Sort </a>
            <div class="dropdown-menu" style="">
              <h6 class="dropdown-header">Actions</h6>
              <a class="dropdown-item" href="#?id=' . $row["id"] . '">View Product</a>
              <a class="dropdown-item" href="update_product.php?id=' . $row['id'] . '">Update Product</a>
              <a class="dropdown-item" href="delete_product.php?id=' . $row['id'] . '">Delete this product</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>  
  <br>

  <div class="product-container">

    <?php
    // sql statement for the table
    $sql = "SELECT * FROM products";
    $result = mysqli_query($conn, $sql);

    // Loop through the data
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<div class='product-item'>";
      echo "<div class='product-item-inner'>";
      // echo "<strong>Product ID: " . $row["id"] . "</strong><br>";

      // image
      echo "<div class='img-space'>";
      if ($row['img'] == NULL) {
        echo "<img src='images/products/default.jpg'>";
      } else {
        echo "<img src='images/products/" . $row["img"] . "'>";
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
                      <a class="dropdown-item" href="#?id=' . $row["id"] . '">View Product</a>
                      <a class="dropdown-item" href="update_product.php?id=' . $row['id'] . '">Update Product</a>
                      <a class="dropdown-item" href="delete_product.php?id=' . $row['id'] . '">Delete this product</a>
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
      echo "<div style='height:100px;'>" . $row['pdescription'] . "</div>";

      echo "</div>"; 
      echo "</div>"; 
    }
    ?>

    <div class='product-item'>
      <div class='product-item-inner'>
        <!-- image -->
          <a href="regproductform.php">
            <div class='img-space'>
              <img style="width: 180px; height: 180px;" src="assets/icons/add-product.png" alt="">
            </div>
          </a>
        
        <!-- label -->
        <div style="text-align: center; justify-content: center;">
          <h5>
            <strong >Add New Product</strong>
          </h5>
        </div>  
      </div>
    </div>
  </div><br>
</div>



<?php include 'templates/footer.php' ?>

