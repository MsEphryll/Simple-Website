<?php
include 'templates/header.php';
include 'templates/conn.php';
include 'templates/product-type.php';
?>

<style>
  .notfound {
    margin: auto;
    padding: 20px;
    text-align:center;
    font-size: 30px;
  }
</style>

<div class="product-container">
  <?php

  // sql statement for the table
  // $sql = "SELECT * FROM users ORDER BY complete_name ASC";
  $sql = "SELECT
                products.id, 
                products.product_name, 
                products.pdescription, 
                products.pt_id, 
                products.qty, 
                products.price, 
                products.img, 
                products.available, 
                product_type.p_type
            FROM
                products
            INNER JOIN
                product_type
            ON 
                products.pt_id = product_type.id
            WHERE   p_type = 'Monitor'";

  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0){
    include 'templates/products-table.php';
  } else {
    echo "<div class='notfound'>No results found.</div>";
  }

  //  close the connection
  mysqli_close($conn);
  ?>
  </div>

  <div class="show-all">
    <div>
      <button type="button" class="btn btn-primary">
        <a href="products.php">Go Back</a>
      </button>
    </div>
  </div> 
</div>


<?php include 'templates/footer.php' ?>
