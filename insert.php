<?php
include "assets/core/db.php";

if (isset($_POST['save'])) {
    // echo "test" . LINE . "\n";
    $queryUserName = $_POST['name'];
    $queryUserEmail = $_POST['email'];
    $queryUserphone = $_POST['phone'];
    $queryUsercategory = $_POST['category'];

    $insertQuery = $con->prepare("INSERT INTO donaties (name, email, phone, category) VALUES (?, ?, ?, ?);");
    $insertQuery->bind_param("ssss", $queryUserName, $queryUserEmail, $queryUserphone, $queryUsercategory);
    if ($insertQuery->execute()) {
    }
}
$con->close();
?>
