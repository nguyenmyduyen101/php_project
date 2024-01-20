<?php
require_once APP_ROOT . "/Models/CartModel.php";
require_once APP_ROOT . "/Models/ProductModel.php";
require_once APP_ROOT . "/Models/UserModel.php";
class OrderItemController
{
    public static function index()
    {
        $userId = $_SESSION['userId'] ?? 1;
        $user = UserModel::get_user($userId);
        $carts = CartModel::get_cart($userId);
        $cartItems = CartModel::get_cart_items($carts['id']);
        require_once APP_ROOT . "/views/order/order.php";
    }
    public static function success()
    {
        require_once APP_ROOT . "/views/order/order_success.php";
    }
}

