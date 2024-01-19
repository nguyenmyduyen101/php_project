<?php 
require_once APP_ROOT ."/Models/Product.model.php";
require_once APP_ROOT ."/Models/Cart.model.php";

$userId = $_SESSION['userId'] ?? 1;
$cart = get_cart($userId);

$categoryId = $_GET['category_id'];
$products = get_product_by_category_id($categoryId);

require_once APP_ROOT . "/views/menu\menu.php";
 ?>
