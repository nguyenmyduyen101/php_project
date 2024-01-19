
<?php 
session_start();
require_once APP_ROOT ."/Models/Cart.model.php";

$cart_item_id = $_GET['itemId'];

remove_cart_item($cart_item_id);

header("Location: /".URL_SUBFOLDER ."/carts");

return;
