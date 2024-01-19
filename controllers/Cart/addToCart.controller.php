<?php
session_start();

require_once APP_ROOT . "/Models/Cart.model.php";
require_once APP_ROOT . "/Models/Product.model.php";
$cartId = $_POST['cart_id'];

if (empty($cartId)) {
    $entityCart = [
        'user_id' => $_SESSION['userId'] ?? 1
    ];
    $cartId = addToCart($entityCart);
}

$productId = $_POST['product_id'];

$product = get_product($productId);

$entityCartItem = [
    'cart_id' => $cartId,
    'product_id' => $productId,
    'price' => $product['product_price'],
    'quantity' => 1
];

$entityCartItem = addToCartItem($entityCartItem);

header("Location: /" . URL_SUBFOLDER . "/carts");

return;
