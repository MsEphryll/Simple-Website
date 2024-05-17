<?php include 'templates/header.php' ?>

<style>
  .form-cont{
    background:transparent;
    backdrop-filter: blur(20px);
    width: 400px;
    height: 550px;
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
  <br>
  <h3 style='text-align:center; margin-auto; width:360px;' >Register Product</h3>
  <form action="regproduct.php" method="POST">
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
    </fieldset>
    <br>
    <button type="submit" style="margin-left: 190px;" class="btn btn-secondary"><a href="products.php">Cancel</a></button>
    <input type="submit" class="btn btn-primary" style='float:right;'></button>
  </form>
  <br>
</div>


<?php include 'templates/footer.php' ?>