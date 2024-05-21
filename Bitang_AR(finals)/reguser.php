<?php 
include 'templates/conn.php';

$sql = "INSERT INTO users (complete_name, email, pword, active, role_id) VALUES ('". $_POST['cName'] ."', '". $_POST['eMail'] ."', '". $_POST['pWord'] ."', 1, ". $_POST['role'] .")";

if (mysqli_query($conn, $sql)) {
    header("Location: users.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
