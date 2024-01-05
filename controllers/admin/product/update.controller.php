<?php
require_once APP_ROOT ."/Models/Product.model.php";
require_once dirname(dirname(dirname(__DIR__))).'/Models/Category.model.php';

$id=$_GET["id"];
$categories = get_all_categories();
$product = get_product($id);
require_once APP_ROOT . "/views/Admin/Product\update.php";
?>