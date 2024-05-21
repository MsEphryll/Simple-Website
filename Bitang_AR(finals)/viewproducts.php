<?php include 'templates/header.php' ?>
<style>
  .img-space {
    width: 350px;
    height: 400px;
    display: flex;
    justify-content: center;
    align-items: center;
    margin:auto;
  }
</style>

<?php
include "templates/conn.php";

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
                products.pt_id = product_type.id WHERE products.id=" . $_GET["id"];
$result = $conn->query($sql);


  while($row = $result->fetch_assoc()) {
    echo '<div style="padding:15px">';
    echo "<div class='container' style='border-style: ridge; width: 700px; margin: 0 auto; border-radius: 10px; padding: 20px; text-align: center; background-color: #FAE7F3;'>"; 

    echo "<h6>" . $row["p_type"] . "</h6>";
    echo "<div style='display: flex-box; align-items: center;'>"; 

    // If the user account does have a profile photo or not
    echo "<div class='img-space'>";
    if ($row['img'] != null) {
              echo "<img src='images/products/" . $row["img"] . "' height='auto' width='250px' style='margin-right: 20px;'>"; 
              echo "</div>";
    } else {
        echo "<img src='images/products/default.jpg' height='250px' width='250px' style='margin-right: 20px;'>";
        echo "</div>";
    }
    echo "</div";
    
    echo '<div>';
    // Name and other information
    echo "<div>";
    echo "<h1 style='color: #0A1172;'>" . $row["product_name"] . "</h1>";
    echo "<h4>Php " . $row['price'] . "</h4><br>";
    echo "Quantity: " . $row['qty'] . "<br>";
    if ($row["qty"] == 0){
      echo "<p class='text-body-tertiary' >Sold Out</p>";
    } else{
      if ($row["available"] == 0) {
        echo "<p class='text-body-tertiary' >Sold Out</p>";
      } else {
        echo "<p class='text-success'>In Stock</p>";
      }
    }
    echo "<p style='text-align:justify; margin-left:20px; margin-right:20px; '>Description: " . $row['pdescription'] . "<br></p>";
    echo "</div>";
    echo "</div><br>";

    // Upload new photo form
    echo "<div class='img-form'>";
    echo '<form action="upload-products.php?id=' . $row["id"] . '" method="POST" enctype="multipart/form-data" style="text-align:center;" >';
    echo '<input type="file" name="fileToUpload" id="fileToUpload" class="form-control"><br>';
    echo '<input type="submit" value="Upload Image" name="submit" class="btn btn-primary" >';
    echo "</form>";
    echo "</div><br></div>";
    echo "</div>";
  }

$conn->close();

// Handle the file upload
if(isset($_POST["submit"])) {
  // Your file upload code here
  // Modify the SQL update query to include the "id" parameter in the WHERE clause
  // After successfully uploading the image and updating the database
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
  // Update user's record with the filename of the uploaded image
  $imageFileName = basename($_FILES["fileToUpload"]["name"]);
  $updateSql = "UPDATE products SET img='$imageFileName' WHERE id=" . $_GET["id"];

  if ($conn->query($updateSql) === TRUE) {
    // Display the alert message
      echo '<div class="alert alert-dismissible alert-primary">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                Profile image updated successfully.
            </div>';

      // Redirect the user to their profile page after a delay
      header("refresh:3; Location=viewproducts.php?id=" . $_GET["id"]);
      exit(); 
  } else {
      echo "Error updating profile image: " . $conn->error;
  }
}
}
?>

<div class="show-all">
  <div>
    <button type="button" class="btn btn-secondary">
      <a href="products.php">Go Back</a>
    </button>
  </div>
</div>;

<?php include 'templates/footer.php' ?>