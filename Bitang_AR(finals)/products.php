<?php
include 'templates/header.php';
include 'templates/conn.php';
include 'templates/product-type.php';
?>



  <div class="product-container">

    <?php
    $sql = "SELECT * FROM products";
    
    $result = mysqli_query($conn, $sql);


    // SQL statement for the table
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
            ORDER BY product_name ASC";
            
    $result = mysqli_query($conn, $sql);

    include "templates/products-table.php";
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
