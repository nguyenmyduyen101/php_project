<?php
session_start();

require_once APP_ROOT ."/Models/Cart.model.php";

// $entityCart = [ 'user_id' => $_SESSION['userId'] ?? 1];


// $cartId = addToCart($entityCart);
$product_id = isset($_POST["product_id"]) ? $_POST["product_id"] :"";
echo $product_id;
$userid = 1;
$user_id = $_SESSION['userid'];

$entity= [
    'user_id'=> $user_id,
    'product_id'=> $product_id,
];
$result = addToCart($entity);

// $entityCartItem = [
//     'cart_id'=> $cartId,
//     'product_id' => $_GET['category_id']

// ];
// $entityCartItem= addToCart($entityCartItem);


header("Location: /".URL_SUBFOLDER ."/carts");

return;

?>