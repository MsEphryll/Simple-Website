<?php
include 'templates/header.php';
include 'templates/conn.php';
include 'templates/product-type.php';
?>

<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  font-size: 20px;
}

#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: #22b24c;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}
</style>


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


<button onclick="topFunction()" id="myBtn" title="Go to top">Back to Top</button>


<script>
// Get the button
let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>

<?php include 'templates/footer.php' ?>
