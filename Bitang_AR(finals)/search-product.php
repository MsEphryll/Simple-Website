<?php
  include "templates/header.php";
  include 'templates/product-type.php';
?>

<style>
  .body-border {
    background:transparent;
    backdrop-filter: blur(10px);
    border-radius:30px;
    margin-top: 15px;
    margin-bottom: 15px;
    box-shadow: 0px 0px 10px #f96863, 0px 0px 10px #f96863 inset;
  }

  .show-all {
    display: flex;
    justify-content: space-between; 
    margin-left: 30px;
    margin-right: 30px;
    padding:20px;
  }

  .options {
    float: right;
  }

  .matches-user {
    padding:10px;
    color: #0A1172;
    font-size: 18px;
    margin-left: 30px;
  }

  .empty-result {
    margin:auto;
    text-align:center;
    font-size:30px;
    padding:10px;
    margin-bottom:10px;
  }
</style>

<?php
include "templates/conn.php";

if (isset($_GET['keywords'])) {
  // Prevent SQL injection using prepared statements
  $keywords = $conn->real_escape_string($_GET['keywords']);


  // Construct the SQL query using prepared statements
  $sql = "SELECT * FROM products 
          WHERE product_name LIKE '%$keywords%'";

$result = mysqli_query($conn, $sql);



if ($result) {
  $num_results = $result->num_rows;

  echo "<div class='matches-user'>Found $num_results results.</div>";
  echo' <div class="product-container">';
  if ($num_results > 0) {

    include "templates/products-table.php";

  } else {
    echo "<div class='empty-result'>No results found.</div>";
  }

  // Free result set
  $result->free();
} else {
  echo "<div>Error executing the query: " . $conn->error . "</div>";
}
} else {
echo "<div>No keywords provided.</div>";
}

echo "</div>";

// Close the database connection
mysqli_close($conn);
?>

<div class="show-all">
    <div>
      <button type="button" class="btn btn-primary">
        <a href="products.php">Go Back</a>
      </button>
    </div>
  </div> 
</div>

<?php include "templates/footer.php"; ?>