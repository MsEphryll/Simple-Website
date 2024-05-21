<?php include 'templates/header.php' ?>
<style>
  .form-cont{
    background:transparent;
    backdrop-filter: blur(20px);
    width: 600px;
    height: auto;
    margin:auto;
    padding:20px;
    border: 2px solid #f96863;
    border-radius:30px;
    box-shadow: 0px 0px 10px #f96863, 0px 0px 10px #f96863 inset;
  } 

  .button-update-back {
    margin-left: 60px;
    margin-top: 5px;
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
  padding: 10px;
}

.profile-image {
  height: 250px;
  width: 250px;
  margin: auto;
  border-radius: 100%;
}

</style>

<br>
<div class="body-form">


<div class="form-cont">
<form action="commit_update.php" method="POST">

<?php
include "templates/conn.php";

$sql = "SELECT * FROM users WHERE id=" . $_GET["id"];
        
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)) {

  echo "<div style='display: flex; align-items: center; justify-content: center;'>";
  // Display profile image
  if ($row['image'] != null) {
    echo "<img src='images/profile/" . $row["image"] . "' height='250px' width='250px' class='profile-image'>"; 
} else {
    echo "<img src='images/profile/default.png' height='250px' width='250px' class='profile-image'>";
}
  ECHO "</div>";

echo "<fieldset>
<div class='row'>
<div class='col-sm-10'>
  <input type='text' name='id' style='text-align:center; margin-auto; width:360px;' class='form-control-plaintext' id='staticEmail' value='" .$row['id'] . "' readonly>
</div>
</div>
  
    <div>
      <label for='exampleInputEmail1' class='form-label mt-4'>Complete Name</label>
      <input type='text' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp' name='cName' value='" .$row['complete_name'] . "' required>  
    </div>

    <div>
      <label for='exampleInputPassword1' class='form-label mt-4'>Email</label>
      <input type='email' class='form-control' id='exampleInputPassword1' autocomplete='off' name='email' value='" .$row['email'] . "' required>
      <small id='emailHelp' class='form-text text-muted'>We'll never share your email with anyone else.</small>
    </div>
</fieldset><br>";

    
    // BUTTONS
    echo "<div class='button-update-back'>";
    echo '<button type="submit" style="margin-left: 325px;" class="btn btn-secondary"><a href="users.php">Cancel</a></button>';
    echo "<input type='submit' class='btn btn-primary' style='float:right;'></button>";
    echo "</div>";
  
}


mysqli_close($conn);
?>


</form>
</div>
</div>
<br>


<?php include 'templates/footer.php' ?>
