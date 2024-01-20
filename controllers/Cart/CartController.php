<?php
require_once APP_ROOT . "/Models/CartModel.php";
require_once APP_ROOT . "/Models/ProductModel.php";
class CartController
{
    public static function index()
    {
        $total_price = 0;
        $cartItems = [];
        $userId = $_SESSION['userId'] ?? 1;
        $carts = CartModel::get_cart($userId);
        if ($carts) {
            $cartItems = CartModel::get_cart_items($carts['id']);
            foreach ($cartItems as $key => $item) {
                $total_price = $total_price + ($item['price'] * $item['quantity']);
            }
        }
        require_once APP_ROOT . "/views/Cart/Cart.php";
    }
    public static function add()
    {
        $cartId = $_POST['cart_id'];
        if (empty($cartId)) {
            $entityCart = [
                'user_id' => $_SESSION['userId'] ?? 1
            ];
            $cartId = CartModel::addToCart($entityCart);
        }
        $productId = $_POST['product_id'];
        $product = ProductModel::get_product($productId);
        $entityCartItem = [
            'cart_id' => $cartId,
            'product_id' => $productId,
            'price' => $product['product_price'],
            'quantity' => 1
        ];
        $entityCartItem =  CartModel::addToCartItem($entityCartItem);
        header("Location: /" . URL_SUBFOLDER . "/carts");
        return;
    }
    public static function delete()
    {
        $cart_item_id = $_GET['itemId'];
        CartModel::remove_cart_item($cart_item_id);
        header("Location: /" . URL_SUBFOLDER . "/carts");
        return;
    }
    public static function update()
    {
        $cart_item_id = $_POST['cart_item_id'];
        $quantity = $_POST['quantity'];
        $entity = [
            'id' => $cart_item_id,
            'quantity' => $quantity,
        ];
        CartModel::update_cart_item($entity);
        header("Location: /" . URL_SUBFOLDER . "/carts");
        return;
    }
}
