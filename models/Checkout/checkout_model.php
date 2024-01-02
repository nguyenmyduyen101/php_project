<?php
class CheckoutModel {
    public function completeOrder($address, $address1, $phone, $zipcode, $password, $amount) {
        include_once'../database/database.php';
        $database = $database;
    
        $conn = new mysqli("your_db_host", "your_db_user", "your_db_password", "your_db_name");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO orders (address, address1, phone, zipcode, password, amount) VALUES ('$address', '$address1', '$phone', '$zipcode', '$password', '$amount')";

        if ($conn->query($sql) === TRUE) {
            $conn->close();
            return true;
        } else {
            $conn->close();
            return false;
        }
    }
}
?>
