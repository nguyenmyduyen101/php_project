<?php
require_once 'database_project_php';

function removeAllItems($userId) {
    $conn = getConnection();
    
    $sql = "DELETE FROM viewCart WHERE userId = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    
    $stmt->close();
    $conn->close();
}
function removeItem($itemId) {
    $conn = getConnection();
    $sql = "DELETE FROM viewCart WHERE cartItemId = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $itemId);
    $stmt->execute();

    $stmt->close();
    $conn->close();
}

function getConnection() {
    $servername = "your_servername";
    $username = "your_username";
    $password = "your_password";
    $dbname = "your_dbname";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    return $conn;
}

?>