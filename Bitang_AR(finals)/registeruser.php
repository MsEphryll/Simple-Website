<?php 
include 'templates/header.php';
include 'templates/conn.php';
?>

<style>
  .form-cont{
    background:transparent;
    backdrop-filter: blur(20px);
    width: 500px;
    max-height: 1000px;
    margin:auto;
    padding:20px;
    border: 2px solid #f96863;
    border-radius:30px;
    box-shadow: 0px 0px 10px #f96863, 0px 0px 10px #f96863 inset;
    margin-top: 10px;
    margin-bottom: 10px;
  }
</style>

<?php
$sql = "SELECT * FROM role ORDER BY role_name ASC";
$result = mysqli_query($conn, $sql);
?>

<div style='overflow-x:auto'>


<div class='form-cont'>
  <br>
  <h3 style='text-align:center; margin-auto; width:360px;'>Register User</h3>
  <form action="reguser.php" method="POST">
    <fieldset>
      <div>
        <label for="inputName" class="form-label mt-4">Complete Name</label>
        <input type="text" class="form-control" name="cName" placeholder="Enter your complete name" required>
      </div>
      <div>
        <label for="exampleInputEmail1" class="form-label mt-4">Email address</label>
        <input type="email" class="form-control" name="eMail" placeholder="Enter email" required>
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div>
        <label for="exampleInputPassword1" class="form-label mt-4">Password</label>
        <input type="password" class="form-control" name="pWord" placeholder="Password" required>
      </div>

      <!-- role selection -->
      <div>
        <label for="exampleSelect1" class="form-label mt-4">Role</label>
        <select class="form-select" id="exampleSelect1" name='role'>
            <?php
              while($row=mysqli_fetch_array($result)){
                echo "<option value='". $row['id']."'>" . $row['role_name']. "</option>";
              }
              mysqli_close($conn);
            ?>
        </select>
      </div>
    </fieldset><br>

    <a href="newrole-form.php" style="text-decoration:underline; margin-top:10px;"><img src="assets/icons/add-user.png" alt="" width='30px' height='30px'>Add New Role</a>

    <!-- Submit Button -->
    <br>
    <button type="submit" style="margin-left: 280px;" class="btn btn-secondary"><a href="users.php">Cancel</a></button>
    <input type="submit" style='float:right'; class="btn btn-primary"></button>
    <!-- <input type="submit">  -->
  </form>
  <br>
</div>
</div>

<?php include 'templates/footer.php' ?>


