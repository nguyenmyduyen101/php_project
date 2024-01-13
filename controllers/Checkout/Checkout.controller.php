<?php
require_once APP_ROOT . "/Models/Order.model.php";
require_once APP_ROOT . "/Models/OrderItem.model.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lấy thông tin từ form
    $user_id = $_POST['user_id'];
    $address = $_POST['address'];
    $order = $_POST['order'];
    $amounts = $order["amount"];
    $product_ids = $order["product_id"];
    for ($i = 0; $i < count($amounts); $i++) {
        $order = [
            "user_id" => $user_id,
            "address" => $address,
            "amount" => $amounts[$i]
        ];
        add_order($order);
        $new_order = get_last_order();
        $order_item = [
            "order_id" => $new_order["id"],
            "product_id" => $product_ids[$i],
            "item_quantity" => $amounts[$i],
        ];
        add_order_item($order_item);
    }
    $_SESSION['message'] = 'Order successfully!';

    header("Location: " . URL_ROOT . URL_SUBFOLDER . "/Home");
} else {
    exit();
}
