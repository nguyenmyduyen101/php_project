<?php

class CartModel {

    private $connection;

    public function __construct($connection) {
        $this->connection = $connection;
    }

    public function removeAllItems() {
        unset($_SESSION['cart']);
        return "All items removed from the cart.";
    }

    public function removeItem($itemId) {
        if (isset($_SESSION['cart'][$itemId])) {
            unset($_SESSION['cart'][$itemId]);
            return "Item removed from the cart.";
        } else {
            return "Item not found in the cart.";
        }
    }

    public function updateCartItemQuantity($pizzaId, $quantity) {
        $_SESSION['cart'][$pizzaId]['quantity'] = $quantity;
        return "Cart updated successfully.";
    }

    public function checkout($userId, $totalAmount, $paymentMode, $address, $zipCode, $phoneNo) {

        $stmt = $this->connection->prepare("INSERT INTO orders (userId, address, zipCode, phoneNo, amount, paymentMode, orderStatus) VALUES (?, ?, ?, ?, ?, ?, '0')");
        $stmt->execute([$userId, $address, $zipCode, $phoneNo, $totalAmount, $paymentMode]);

        $orderId = $this->connection->lastInsertId();

        foreach ($_SESSION['cart'] as $pizzaId => $item) {
            $quantity = $item['quantity'];

            $stmt = $this->connection->prepare("INSERT INTO orderItems (orderId, pizzaId, itemQuantity) VALUES (?, ?, ?)");
            $stmt->execute([$orderId, $pizzaId, $quantity]);
        }

        unset($_SESSION['cart']);

        return "Checkout successful. Order placed!";
    }
}

?>
