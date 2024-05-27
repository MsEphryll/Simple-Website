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
    margin:auto;
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

  .show-all {
    display: flex;
    justify-content: space-between; 
    margin-left: 30px;
    margin-right: 30px;
    padding:20px;
  }

  .product-name {
    float:left;
    height: 70px;
  }

  .options {
    float:right;
    margin-top: -10px;
  }


  .add-sort-search {
    display: flex;
    justify-content: space-between; 
    margin-right:20px;

  }

  .description-scroll {
    width: 400px;
    height: 120px;
    padding: 15px;
    overflow-y: auto;
    text-align: justify;
  }

  .description-scroll::-webkit-scrollbar {
    display: none;
    /* width: 10px; */
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
        <form action='search-product.php' class="d-flex" style="width: 100%;">
        <input class="form-control me-sm-2 primary" type="search" placeholder="Search" style="width: 300px;" name="keywords">
          <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>

      <!-- sort -->
      <div class='sorting'>
          <ul class="nav nav-pills flex-column">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="font-size:18px;">Show</a>
              <div class="dropdown-menu" style="">
                <h6 class="dropdown-header">Actions</h6>
                <a class="dropdown-item" href="products.php">All Products</a>
                <a class="dropdown-item" href="laptops.php">Laptops</a>
                <a class="dropdown-item" href="mouse.php">Mouse/Keyboards</a>
                <a class="dropdown-item" href="phones.php">Cellular Phones/Tablet/iPad</a>
                <a class="dropdown-item" href="monitor.php">Monitors</a>
                <a class="dropdown-item" href="others.php">Others</a>
              </div>
            </li>
          </ul>
        </div>

    </div>
  </div>  
  <br>