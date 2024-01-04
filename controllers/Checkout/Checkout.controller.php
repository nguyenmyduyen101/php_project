<?php
// Import các file model và các thư viện cần thiết
require_once 'checkout_model.php';

// Kiểm tra xem action được thực hiện là gì
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lấy thông tin từ form
    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    $zipcode = $_POST['zipcode'];
    $password = $_POST['password'];
    
    $paymentResult = processPayment($fullname, $phone, $zipcode, $password);
    
    // Kiểm tra kết quả thanh toán
    if ($paymentResult) {
        header("Location: /path/to/order_confirmation.php");
        exit();
    } else {
       
        header("Location: /path/to/checkout.php");
        exit();
    }
} else {
    header("Location: /path/to/checkout.php");
    exit();
}
?>