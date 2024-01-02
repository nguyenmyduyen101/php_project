<?php
require_once dirname(dirname(__DIR__)).'/database/database.php';
global $conn;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hash the password


    $sql = "INSERT INTO users (username, firstName, lastName, email, phone, userType, password, joinDate)
            VALUES (?, ?, ?, ?, ?, '0', ?, NOW())";


    $stmt = $conn->prepare($sql);
    $stmt->bindParam(1, $username);
    $stmt->bindParam(2, $firstName);
    $stmt->bindParam(3, $lastName);
    $stmt->bindParam(4, $email);
    $stmt->bindParam(5, $phone);
    $stmt->bindParam(6, $password);


    try {
        $stmt->execute();
        echo "Đăng ký thành công!";
    } catch (PDOException $e) {
        echo "Đã xảy ra lỗi khi đăng ký. Vui lòng thử lại sau.";
   
    }


    $stmt->closeCursor();
    
}
require_once dirname(dirname(__DIR__)).'/views/checkout/Checkout.php';
?>


