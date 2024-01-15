<?php
session_start();

require_once APP_ROOT ."/Models/Cart.model.php";

$entityCart = [ 'user_id' => $_SESSION['userId'] ?? 1];


$cartId = addToCart($entityCart);

$entityCartItem = [
    'cart_id'=> $cartId,
    'product_id' => $_GET['category_id']

];
$entityCartItem= addToCart($entityCartItem);


header("Location: /".URL_SUBFOLDER ."/carts");

return;

?>