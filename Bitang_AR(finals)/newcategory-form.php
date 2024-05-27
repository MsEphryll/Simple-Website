<?php 
include 'templates/header.php';
?>

<style>
  .form-cont{
    background:transparent;
    backdrop-filter: blur(20px);
    width: 400px;
    max-height: 580px;
    margin:auto;
    padding:20px;
    border: 2px solid #f96863;
    border-radius:30px;
    box-shadow: 0px 0px 10px #f96863, 0px 0px 10px #f96863 inset;
    margin-top: 10px;
    margin-bottom: 10px;
  }
</style>


<div style='overflow-x:auto'>


<div class='form-cont'>
  <br>
  <h3 style='text-align:center; margin-auto; width:360px; '>Add New Category</h3>
  <form action="add-new-category.php" method="POST">
    <fieldset>
      <div>
        <label for="inputName" class="form-label mt-4">Category</label>
        <input type="text" class="form-control" name="categoryName" placeholder="Enter category" required>
      </div>
    </fieldset>

    <!-- Submit Button -->
    <br>
    <button type="submit" style="margin-left: 190px;" class="btn btn-secondary"><a href="regproductform.php">Cancel</a></button>
    <input type="submit" style='float:right'; class="btn btn-primary">  </button>
    <!-- <input type="submit">  -->
  </form>
  <br>
</div>
</div>

<?php include 'templates/footer.php' ?>


