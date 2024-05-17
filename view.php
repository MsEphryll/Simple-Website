<?php include 'templates/header.php' ?>

<div class="user-account-section" style="text-align: center; margin-bottom: 20px;">
    <h3>User Account</h3>
</div>

<?php
include "templates/conn.php";

$sql = "SELECT * FROM users WHERE id=" . $_GET["id"];
$result = $conn->query($sql);


  while($row = $result->fetch_assoc()) {
    echo "<div class='container' style='border-style: ridge; width: 700px; margin: 0 auto; border-radius: 10px; padding: 20px; text-align: center; background-color: #FAE7F3;'>"; 

    echo "<h6>User ID: " . $row["id"] . "</h6>";
    echo "<div style='display: flex; align-items: center; justify-content: center;'>"; 

    // If the user account does have a profile photo or not
    if ($row['image'] != null) {
              echo "<img src='images/profile/" . $row["image"] . "' height='250px' width='250px' style='margin-right: 20px; border-radius: 50%;'>"; 
    } else {
        echo "<img src='images/profile/default.png' height='250px' width='250px' style='margin-right: 20px; border-radius: 50%;'>";
    }
    
    
    // Name and other information
    echo "<div>";
    echo "<h1 style='color: #0A1172;'>" . $row["complete_name"] . "</h1>";
    echo "<p>Email: " . $row['email'] . "<br>";
    echo "Date Registered: " . $row['date_at'] . "<br></p>";
    echo "</div>";
    echo "</div><br>";

    // Upload new photo form
    echo "<form action='upload.php' method='POST' enctype='multipart/form-data' style='text-align:center;' >";
    echo "<input type='file' name='myImage'>";
    echo "<input type='submit' name='submit' value='Upload'>";
    echo "</form>";
    echo "</div><br>";
  }

$conn->close();
?>

<a href="users.php" class="btn btn-link"><img src="images/arrow.png" style="height: 10px; width: 10px;"> Go Back</a><br>

<?php include 'templates/footer.php' ?>



<!-- Watch:
https://www.youtube.com/watch?v=onu3w8kqASU
-->