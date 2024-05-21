<?php
include "templates/header.php";
include "templates/conn.php";
?>

<style>
/* Alert message styles */
.alert {
  padding: 15px;
  margin-bottom: 20px;
  border: 1px solid transparent;
  border-radius: 4px;
}

.alert-primary {
  color: #004085;
  background-color: #cce5ff;
  border-color: #b8daff;
}

.alert-primary .btn-close {
  color: #004085;
}

/* Container styling */
.container-view {
  border-style: ridge;
  width: 700px;
  border-radius: 10px;
  padding: 30px;
  text-align: center;
  background-color: #FAE7F3;
  margin: 0 auto;
  overflow-x:auto;
}

/* Profile image styling */
.profile-image {
  height: 250px;
  width: 250px;
  margin-right: 20px;
  border-radius: 100%;
}

.upload-form {
  text-align: center;
  margin-top: 20px;
}

.upload-form input[type="file"] {
  margin-bottom: 10px;
  width: 400px;
  margin:auto;
  margin-bottom:10px;
}

.upload-form input[type="submit"] {
  background-color: #eb6864;
  color: white;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
}

.upload-form input[type="submit"]:hover {
  background-color: #0c236c;
}

.user-details {
  text-align: left;
}

.user-details {
  display: inline-flex;
  align-items: center;
  margin-left:30px;
}

.user-details h1 {
  margin-right: 5px; /* Adjust as needed */
}
</style>

<?php
if(isset($_GET["id"])) {
    $sql = "SELECT  users.id, 
                    users.complete_name, 
                    users.email, 
                    users.active, 
                    users.image,
                    users.date_at,
                    role.role_name
                FROM
                    users 
                INNER JOIN
                    role
                ON 
                    users.role_id = role.id WHERE users.id=" . $_GET["id"];

    $result = $conn->query($sql);

    if($row = $result->fetch_assoc()) {
      echo "<div style='margin-top:30px;'>";
        echo "<div class='container-view'>"; 

       
        echo "<h3>" . $row["role_name"] . "</h3>";
        
        echo "<div style='display: flex; align-items: center; justify-content: center;'>"; 

        // Display profile image
        if ($row['image'] != null) {
            echo "<img src='images/profile/" . $row["image"] . "' height='250px' width='250px' class='profile-image'>"; 
        } else {
            echo "<img src='images/profile/default.png' height='250px' width='250px' class='profile-image'>";
        }

        echo "<div>";
        echo "<div class='user-details'>";
        echo "<h1 style='color: #0A1172;'>" . $row["complete_name"] . "</h1>";
        if ($row['active'] == 1) {
          echo "<img src='assets/icons/green.png' height='20px' width='20px' >";
        } else {
          echo "<img src='assets/icons/grey.png' height='20px' width='20px' >";
        }
        echo "</div>";
        echo "<p>Email: " . $row['email'] . "<br>";
        echo "Date Registered: " . $row['date_at'] . "<br></p>";
        echo "</div>";
        echo "</div>";

        // Upload new photo form
        echo "<div class='upload-form'>";
        echo '<form action="upload.php?id=' . $row["id"] . '" method="post" enctype="multipart/form-data">';
        echo '<input type="file" name="fileToUpload" id="fileToUpload" class="form-control">';
        echo '<input type="submit" value="Upload Image" name="submit" class="btn btn-primary">';
        echo '</form>';
        echo "</div>";

        echo "</div><br>";
        echo '<div class="show-all">
                <div>
                  <button type="button" class="btn btn-secondary">
                    <a href="users.php">Go Back</a>
                  </button>
                </div>
              </div>';
        echo "</div>";
        
    } else {
        echo "User not found.";
    }
} else {
    echo "User ID is not specified.";
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
  $updateSql = "UPDATE users SET image='$imageFileName' WHERE id=$userId";

  if ($conn->query($updateSql) === TRUE) {
    // Display the alert message
      echo '<div class="alert alert-dismissible alert-primary">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                Profile image updated successfully.
            </div>';

      // Redirect the user to their profile page after a delay
      header("refresh:3; Location=profile.php?id=$userId");
      exit(); 
  } else {
      echo "Error updating profile image: " . $conn->error;
  }
}
}


include "templates/footer.php";
?>

