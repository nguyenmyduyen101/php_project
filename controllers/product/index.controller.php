<?php
require_once APP_ROOT . "/Models/Product.model.php";
require_once APP_ROOT . "/Models/Cart.model.php";
require_once APP_ROOT . "/Models/Category.model.php";

$userId = $_SESSION['userId'] ?? 1;
$cart = get_cart($userId);
$categoryId = $_GET['category_id'];
$category = get_category($categoryId);
$products = get_product_by_category_id($categoryId);

require_once APP_ROOT . "/views/menu\menu.php";
