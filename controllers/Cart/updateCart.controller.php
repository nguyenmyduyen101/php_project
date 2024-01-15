<?php 
session_start();

require_once APP_ROOT ."/Models/Cart.model.php";
$cart_id = $_POST['itemId'];
$product= $_POST['product_id'];
$entity= [
    'id'=> $cart_id,
    'product_id'=> $product_id,

];
$result= update_Cart($entity);