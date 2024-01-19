<?php 
session_start();

require_once APP_ROOT ."/Models/Cart.model.php";
$cart_item_id = $_POST['cart_item_id'];
$quantity= $_POST['quantity'];
$entity= [
    'id'=> $cart_item_id,
    'quantity'=> $quantity,
];
update_cart_item($entity);
header("Location: /".URL_SUBFOLDER ."/carts");

return;