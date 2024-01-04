<?php
function connectToDatabase() {
    $servername = "your_servername";
    $username = "your_username";
    $password = "your_password";
    $dbname = "database_project_php";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
    }

    return $conn;
}
function processPayment($fullname, $phone, $zipcode, $password) {
    $conn = connectToDatabase();
    
    return true;
}

?>