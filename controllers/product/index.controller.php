<?php 
require_once APP_ROOT ."/Models/Product.model.php";

$categoryId = $_GET['category_id'];
$products = ProductModel::get_product_by_category_id($categoryId);

require_once APP_ROOT . "/views/menu\menu.php";
 ?>
