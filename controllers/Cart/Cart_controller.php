<?php

include 'Cart_models.php';
class CartController
{
    private $cartModel;

    public function __construct()
    {
        $this->cartModel = new CartModel();
    }

    public function removeCartItem($itemId)
    {
        if ($this->cartModel->removeCartItem($itemId)) {
            echo "Item removed successfully!";
        } else {
            echo "Error removing item!";
        }
    }

    public function removeAllCartItems($userId)
    {
        if ($this->cartModel->removeAllCartItems($userId)) {
            echo "All items removed successfully!";
        } else {
            echo "Error removing items!";
        }
    }
}

$cartController = new CartController();

if (isset($_POST['removeItem'])) {
    $itemId = $_POST['itemId'];
    $cartController->removeCartItem($itemId);
}

if (isset($_POST['removeAllItem'])) {
    $userId = $_POST['userId'];
    $cartController->removeAllCartItems($userId);
}
?>
