<?php
require_once APP_ROOT . "/Models/OrderModel.php";
require_once APP_ROOT . "/Models/OrderItemModel.php";
require_once APP_ROOT . "/Models/CartModel.php";

class CheckoutController
{
    public static function checkout()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Lấy thông tin từ form
            $user_id = $_POST['user_id'];
            $address = $_POST['address'];
            $cart = CartModel::get_cart($user_id);
            $cartItems = CartModel::get_cart_items($cart['id']);
            $total_price = 0;
            foreach ($cartItems as $key => $item) {
                $total_price = $total_price + ($item['price'] * $item['quantity']);
            }
            $order_data = [
                "user_id" => $user_id,
                "address" => $address,
                "amount" => $total_price,
                "phone_no" => $_POST['phone_no']
            ];
            OrderModel::add_order($order_data);
            $new_order = OrderModel::get_last_order();

            foreach ($cartItems as $key => $item) {
                $order_items_data = [
                    "order_id" => $new_order["id"],
                    "product_id" => $item["product_id"],
                    "item_quantity" => $item["quantity"],
                ];
                OrderItemModel::add_order_item($order_items_data);
            }
            CartModel::remove_cart($cart['id']);

            header("Location: " . URL_ROOT . URL_SUBFOLDER . "/order/order_success");
        } else {
            exit();
        }
    }
}
