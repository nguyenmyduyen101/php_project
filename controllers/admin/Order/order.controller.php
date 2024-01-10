<?php
require_once APP_ROOT ."/Models/Order.model.php";
require_once APP_ROOT ."/Models/OrderItem.model.php";
require_once APP_ROOT ."/Models/Product.model.php";
require_once APP_ROOT ."/Models/User.model.php";

// $user_id = 1;
// $user = get_user($user_id);
// $orders_by_user = get_order_by_user_id($user_id);
$orders_in_db = get_all_orders();
$orders = [];
foreach($orders_in_db as $order){
    $order_item =  get_order_item_by_order_id($order["id"]);
    $product = get_product($order_item["product_id"]);
    $user = get_user($order["user_id"]);
    $obj = [
        "order" => $order,
        "product" => $product,
        "user" => $user
    ];
    array_push($orders, $obj);
}
require_once APP_ROOT . "/views/admin/Order/index.php";
