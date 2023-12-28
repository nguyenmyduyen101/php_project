<?php
session_start();


$hostname = "localhost";
$database = "database_project_php";
$username = "root";
$password = "";


$dsn = "mysql:host=$hostname;dbname=$database;charset=utf8mb4";


try {
    $connection = new PDO($dsn, $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
   
    if (isset($_POST['removeAllItem'])) {
        unset($_SESSION['cart']);
        echo "All items removed from the cart.";
    }


    if (isset($_POST['removeItem'])) {
        $itemId = $_POST['itemId'];
       
       
        if (isset($_SESSION['cart'][$itemId])) {
            unset($_SESSION['cart'][$itemId]);
            echo "Item removed from the cart.";
        } else {
            echo "Item not found in the cart.";
        }
    }


    if (isset($_POST['pizzaId']) && isset($_POST['quantity'])) {
        $pizzaId = $_POST['pizzaId'];
        $quantity = $_POST['quantity'];


        $_SESSION['cart'][$pizzaId]['quantity'] = $quantity;
        echo "Cart updated successfully.";
    }


    if (isset($_POST['checkout'])) {
       
        echo "Checkout logic goes here.";
       
        $userId = $_POST['userId'];
        $totalAmount = $_POST['totalAmount'];
        $paymentMode = $_POST['paymentMode'];
        $address = $_POST['address'];
        $zipCode = $_POST['zipCode'];
        $phoneNo = $_POST['phoneNo'];
       
       
        $stmt = $connection->prepare("INSERT INTO orders (userId, address, zipCode, phoneNo, amount, paymentMode, orderStatus) VALUES (?, ?, ?, ?, ?, ?, '0')");
        $stmt->execute([$userId, $address, $zipCode, $phoneNo, $totalAmount, $paymentMode]);
       
       
        $orderId = $connection->lastInsertId();


       
        foreach ($_SESSION['cart'] as $pizzaId => $item) {
            $quantity = $item['quantity'];


            $stmt = $connection->prepare("INSERT INTO orderItems (orderId, pizzaId, itemQuantity) VALUES (?, ?, ?)");
            $stmt->execute([$orderId, $pizzaId, $quantity]);
        }


       
        unset($_SESSION['cart']);
    }
}
?>



