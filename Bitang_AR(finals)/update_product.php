<?php
include "templates/header.php";
?>

<style>
  .form-cont{
    background:transparent;
    backdrop-filter: blur(20px);
    width: 400px;
    height: 530px;
    margin:auto;
    padding:20px;
    border: 2px solid #f96863;
    border-radius:30px;
    box-shadow: 0px 0px 10px #f96863, 0px 0px 10px #f96863 inset;
    margin-top: 10px;
    margin-bottom: 10px;
  }
</style>


<div class='form-cont'>
<form action="commit_update_product.php" method="POST">

<?php
include "templates/conn.php";

// Check if $_GET["pid"] is set and numeric
if(isset($_GET["id"]) && is_numeric($_GET["id"])) {
    $pid = $_GET["id"];

    // Query to select product information
    $sql = "SELECT * FROM products WHERE id=" . $pid;
    $result = mysqli_query($conn, $sql);

    // Check if the query was successful
    if($result) {
        // Check if there are any rows returned
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)){
              echo "<fieldset>
                      <div class='row'>
                        <div class='col-sm-10'>
                          <input type='text' name='pid' class='form-control-plaintext' style='text-align:center; margin-auto; width:360px;' id='staticEmail' value='" .$row['id'] . "' readonly>
                        </div>
                      </div>
                      
                      <div>
                        <label for='exampleInputEmail1' class='form-label mt-4'>Product Name</label>
                        <input type='text' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp' name='pName' value='" .$row['product_name'] . "' required>  
                      </div>

                      <div>
                        <label for='exampleInputPassword1' class='form-label mt-4'>Description</label>
                        <input type='text' class='form-control' id='exampleInputPassword1' name='description' value='" .$row['pdescription'] . "' required>
                      </div>

                      <div>
                        <label for='exampleInputPassword1' class='form-label mt-4'>Price</label>
                        <input type='text' class='form-control' id='exampleInputPassword1' name='price' value='" .$row['price'] . "' required>
                      </div>

                      <div>
                        <label for='exampleInputPassword1' class='form-label mt-4'>Quantity</label>
                        <input type='text' class='form-control' id='exampleInputPassword1' name='qty' value='" .$row['qty'] . "' required>
                      </div>
                      
                  </fieldset><br>";
            }
        } else {
            echo "No product found with ID: $pid";
        }
    } else {
        // Display error message if the query fails
        echo "Error: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
} else {
    // Display error message if $_GET["pid"] is not set or not numeric
    echo "Invalid product ID";
}

echo '<button type="submit" style="margin-left: 190px;" class="btn btn-secondary"><a href="products.php">Cancel</a></button>';
echo "<input type='submit' class='btn btn-primary' style='float:right; value='Update'></button><br><br>";


?>

</form>
</div>



<?php
  include "templates/footer.php";
  ?>