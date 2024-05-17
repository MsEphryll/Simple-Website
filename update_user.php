<?php include 'templates/header.php' ?>
<style>
  .form-cont{
    background:transparent;
    backdrop-filter: blur(20px);
    width: 400px;
    height: 370px;
    margin:auto;
    padding:20px;
    border: 2px solid #f96863;
    border-radius:30px;
    box-shadow: 0px 0px 10px #f96863, 0px 0px 10px #f96863 inset;
  } 

  .button-update-back {
    margin-left: 20px;
    margin-top: 5px;
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
}

echo "<div class='button-update-back'>";
echo '<button type="submit" style="margin-left: 175px;" class="btn btn-secondary"><a href="users.php">Cancel</a></button>';
echo "<input type='submit' class='btn btn-primary' style='float:right;'></button>";
echo "</div>";


mysqli_close($conn);
?>

</form>
</div>
</div>
<br>


<?php include 'templates/footer.php' ?>
