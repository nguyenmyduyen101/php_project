<?php
require_once 'cart_model.php';

if (isset($_POST['removeAllItem'])) {
    $userId = $_POST['userId'];
    removeAllItems($userId);
} elseif (isset($_POST['removeItem'])) {
    $itemId = $_POST['itemId'];
    removeItem($itemId);
}
header("Location: /path/to/cart.php");
exit();
?>