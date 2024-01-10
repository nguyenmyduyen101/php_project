<?php
require_once APP_ROOT ."/Models/Product.model.php";
require_once dirname(dirname(dirname(__DIR__))).'/Models/Category.model.php';

$categories = get_all_categories();
$products = get_all_products();
require_once APP_ROOT . "/views/admin/Product\index.php";
?>