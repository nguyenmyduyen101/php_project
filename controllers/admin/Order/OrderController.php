<?php
require_once APP_ROOT . "/Models/OrderModel.php";
require_once APP_ROOT . "/Models/OrderItemModel.php";
require_once APP_ROOT . "/Models/ProductModel.php";
require_once APP_ROOT . "/Models/UserModel.php";
class OrderController
{
    public static function index()
    {
        $orders_in_db = OrderModel::get_all_orders();
        $orders = [];
        foreach ($orders_in_db as $order) {
            $order_item =  OrderItemModel::get_order_item_by_order_id($order["id"]);
            $product = ProductModel::get_product($order_item["product_id"]);
            $user = UserModel::get_user($order["user_id"]);
            $obj = [
                "order" => $order,
                "product" => $product,
                "user" => $user
            ];
            array_push($orders, $obj);
        }
        require_once APP_ROOT . "/views/admin/Order/index.php";
    }
    public static function delete()
    {
        require_once APP_ROOT . "/Models/OrderModel.php";
        $id = $_GET["id"];
        OrderModel::remove_order($id);
        header("Location: /" . URL_SUBFOLDER . "/Admin/Order");
    }
    public static function update()
    {
        require_once APP_ROOT . "/Models/OrderModel.php";
        $id = $_GET["id"];
        $order = OrderModel::get_order($id);
        require_once APP_ROOT . "/views/admin/Order\update.php";
    }
    public static function updatePost()
    {
        require_once APP_ROOT . "/Models/OrderItemModel.php";
        $entity =
            [
                "id" => $_POST["id"],
                "user_id" => $_POST["user_id"],
                "address" => $_POST["address"],
                "zip_code" => $_POST["zip_code"],
                "phone_no" => $_POST["phone_no"],
                "amount" => $_POST["amount"],
                "payment_mode" => $_POST["payment_mode"],
                "order_status" => $_POST["order_status"],
                "create_at" => new DateTime($_POST["create_at"]),
                "update_at" => new DateTime()
            ];
        OrderModel::update_order($entity);
        header("Location: /" . URL_SUBFOLDER . "/Admin/Order");
    }
}
