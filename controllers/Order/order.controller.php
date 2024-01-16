<?php
require_once APP_ROOT . "/Models/Cart.model.php";
require_once APP_ROOT . "/Models/CartItemModel.php";
require_once APP_ROOT . "/Models/ProductModel.php";
require_once APP_ROOT . "/Models/UserModel.php";

$user_id = $_SESSION["userId"];
$carts_in_db = get_cart_by_user_id($user_id);
$carts = [];
$user = get_user($user_id);
foreach ($carts_in_db as $cart) {
    $product = ProductModel::get_product($cart["product_id"]);
    $obj = [
        "cart" => $cart,
        "product" => $product,
    ];
    array_push($carts, $obj);
}
require_once APP_ROOT . "/views/order/order.php";
