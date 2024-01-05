<?php

include '../../database/database.php';
class CartModel
{
    private $conn;

    public function __construct()
    {
        global $servername, $username, $password, $database;

        $this->conn = new mysqli($servername, $username, $password, $database);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function removeCartItem($itemId)
    {
        $itemId = $this->conn->real_escape_string($itemId);

        $sql = "DELETE FROM cart_items WHERE id = $itemId";

        if ($this->conn->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }

    public function removeAllCartItems($userId)
    {
        $userId = $this->conn->real_escape_string($userId);

        $sql = "DELETE FROM cart_items WHERE user_id = $userId";

        if ($this->conn->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }

    public function __destruct()
    {
        $this->conn->close();
    }
}

?>
