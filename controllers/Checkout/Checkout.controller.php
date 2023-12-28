<?php

$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "database_project_php";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = $_POST["fullname"];
    $phone = $_POST["phone"];
    $zipCode = $_POST["zipcode"];
    $password = $_POST["password"];

    
    $sql = "INSERT INTO users (username, firstName, lastName, email, phone, password) VALUES ('$username', '$firstName', '$lastName', '$email', '$phone', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Thông tin đã được lưu vào cơ sở dữ liệu.";
    } else {
        echo "Lỗi: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
}
?>