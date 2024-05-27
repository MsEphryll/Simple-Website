<?php
include 'templates/conn.php';


$id = $_GET["id"];
$sql = "SELECT available FROM products WHERE id=$id";
$result = mysqli_query($conn, $sql);

if ($result !== false) {
    while($row = mysqli_fetch_assoc($result)){
      
        if($row['available'] == 1){
            $updateSql = "UPDATE products SET available=0 WHERE id=$id";
        } else {
            $updateSql = "UPDATE products SET available=1 WHERE id=$id";
        }
        $updateResult = mysqli_query($conn, $updateSql);
        if ($updateResult === false) {

            echo "Error: " . mysqli_error($conn);
        }
    }
} else {
    echo "Error: " . mysqli_error($conn);
}

header('Location: products.php');
exit;