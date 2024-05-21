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

.bg-bg{
    background-image: url('images/background-img.jpg'); 
    padding: 10px;
}
</style>

<div class='bg-bg'>


<?php
include "templates/conn.php";
// Display errors for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Check if "id" parameter is set
if (isset($_GET["id"])) {
    $userId = $_GET["id"];

    // Check if "id" is a valid integer
    if (filter_var($userId, FILTER_VALIDATE_INT)) {
        $target_dir = "images/profile/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if image file is an actual image or fake image
        if (isset($_POST["submit"])) {
            // Check if the file upload encountered an error
            if ($_FILES["fileToUpload"]["error"] != 0) {
                echo "<div class='bg-bg'>Error during file upload: " . $_FILES["fileToUpload"]["error"] . "</div>";
                $uploadOk = 0;
            } else {
                $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                if ($check !== false) {
                    // echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    echo "<div class='bg-bg'>File is not an image.</div>";
                    $uploadOk = 0;
                }
            }
        }

        // Check if file already exists
        if (file_exists($target_file)) {
            echo "<div class='bg-bg'>Sorry, file already exists.</div>";
            $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 5000000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                // echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";

                // Update user's record with the filename of the uploaded image
                $imageFileName = basename($_FILES["fileToUpload"]["name"]);
                $updateSql = "UPDATE users SET image='$imageFileName' WHERE id=$userId";
                if ($conn->query($updateSql) === TRUE) {
                    echo "<div class='alert alert-primary' role='alert'>
                                Profile image updated successfully.
                            </div>";
                    // Redirect the user to their profile page after a delay
                    header("Location: view.php?id=$userId");
                    exit();
                } else {
                    echo "Error updating profile image: " . $conn->error;
                }
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    } else {    
        echo "User ID is not a valid integer.";
    }
} else {
    echo "User ID is not specified.";
}
?>

</div>