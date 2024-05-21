<?php
  include "templates/header.php";
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


<div class="body-border">
  <br>
  <h1 style='text-align:center; margin-auto; padding:10px;'><strong>Results</strong></h1>
<?php
include "templates/conn.php";

if (isset($_GET['keywords'])) {
  // Prevent SQL injection using prepared statements
  $keywords = $conn->real_escape_string($_GET['keywords']);

  // Construct the SQL query using prepared statements
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
          WHERE complete_name LIKE '%$keywords%'
          OR    role_name LIKE '%$keywords%'";

  $result = mysqli_query($conn, $sql);

  if ($result) {
    $num_results = $result->num_rows;

    echo "<div class='matches-user'>Found $num_results results.</div>";

    if ($num_results > 0) {

      include 'templates/roles-table.php';

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

// Close the database connection
mysqli_close($conn);
?>

  <div class="show-all">
    <div>
      <button type="button" class="btn btn-primary">
        <a href="users.php">Go Back</a>
      </button>
    </div>
  </div> 

</div>

<?php include "templates/footer.php"; ?>

