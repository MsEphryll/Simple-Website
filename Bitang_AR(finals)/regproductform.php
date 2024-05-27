<?php include 'templates/header.php'; 
      include 'templates/conn.php';
      ?>

<style>
  .form-cont{
    background:transparent;
    backdrop-filter: blur(20px);
    width: 600px;
    max-height: 1000px;
    margin:auto;
    padding:20px;
    border: 2px solid #f96863;
    border-radius:30px;
    box-shadow: 0px 0px 10px #f96863, 0px 0px 10px #f96863 inset;
    margin-top: 10px;
    margin-bottom: 10px;
  }
</style>

<?php
$sql = "SELECT * FROM product_type";
$result = mysqli_query($conn, $sql);
?>
<div style='overflow-x:auto'>
<div class='form-cont'>
  <br>
  <h3 style='text-align:center; margin-auto;' >Register Product</h3>
  <form action="regproduct.php" method="POST" >
    <fieldset>
      <div>
        <label  class="form-label mt-4">Product Name</label>
        <input type="text" class="form-control" name="pName" placeholder="Enter product name" required>
      </div>
      <div>
        <label class="form-label mt-4">Description</label>
        <input type="text" class="form-control" name="dcrption" placeholder="Description" required>
      </div>
      <div>
        <label class="form-label mt-4">Quantity</label>
        <input type="text" class="form-control" name="qty" placeholder="Quantity" required>
      </div>
      <div>
        <label class="form-label mt-4">Price</label>
        <input type="text" class="form-control" name="price" placeholder="Price of the product" required>
      </div>

      <!-- role selection -->
      <div>
        <label for="exampleSelect1" class="form-label mt-4">Product Type</label>
        <select class="form-select" id="exampleSelect1" name='type'>
            <?php
              while($row=mysqli_fetch_array($result)){
                echo "<option value='". $row['id']."'>" . $row['p_type']. "</option>";
              }
              mysqli_close($conn);
            ?>
        </select>
      </div>
    </fieldset>
    <br>

    <a href="newcategory-form.php" style="text-decoration:underline; margin-top:10px;"><img src="assets/icons/add-product.png" alt="" width='30px' height='30px'>Add New Category</a><br>

    <button type="submit" style="margin-left: 380px;" class="btn btn-secondary"><a href="products.php">Cancel</a></button>
    <input type="submit" class="btn btn-primary" style='float:right;'>
  </form>
  <br>
</div>
</div>


<?php include 'templates/footer.php' ?>