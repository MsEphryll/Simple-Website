<?php
include 'templates/header.php';
require 'templates/conn.php';
include 'templates/roles.php';
?>

  <?php

  // sql statement for the table
  // $sql = "SELECT * FROM users ORDER BY complete_name ASC";
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
                  users.role_id = role.id 
          ORDER BY users.complete_name";

  $result = mysqli_query($conn, $sql);

  include 'templates/roles-table.php';

  //  close the connection
  mysqli_close($conn);
  ?>
</div>


<?php include 'templates/footer.php' ?>


