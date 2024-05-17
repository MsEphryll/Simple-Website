<?php
include 'templates/conn.php';


$id = $_GET["id"];
$sql = "SELECT active FROM users WHERE id=$id";
$result = mysqli_query($conn, $sql);

if ($result !== false) {
    while($row = mysqli_fetch_assoc($result)){
      
        if($row['active'] == 1){
            $updateSql = "UPDATE users SET active=0 WHERE id=$id";
        } else {
            $updateSql = "UPDATE users SET active=1 WHERE id=$id";
        }
        $updateResult = mysqli_query($conn, $updateSql);
        if ($updateResult === false) {

            echo "Error: " . mysqli_error($conn);
        }
    }
} else {
    echo "Error: " . mysqli_error($conn);
}

header('Location: users.php');
exit;