<?php
require_once APP_ROOT ."/Models/Cart.model.php";
$userId = $_SESSION['userId'] ?? 1;

$carts = get_cart($userId);

$cartItems = get_cart_items($carts['id']);

require_once APP_ROOT . "/views/Cart/Cart.php";