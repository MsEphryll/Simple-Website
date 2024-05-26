<?php
include 'templates/header.php';
require 'templates/conn.php';
include 'templates/roles.php';
?>

<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  font-size: 20px;
}

#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: #22b24c;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}
</style>

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

<button onclick="topFunction()" id="myBtn" title="Go to top">Back to Top</button>

<script>
// Get the button
let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>

<?php include 'templates/footer.php' ?>


