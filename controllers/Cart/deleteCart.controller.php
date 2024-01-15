<?php   
session_start();

require_once APP_ROOT ."/Models/Cart.model.php";
$cart_id = $_POST['itemId'];
$entity= [
    'id'=> $cart_id,
];
$result= remove_Cart($entity);
