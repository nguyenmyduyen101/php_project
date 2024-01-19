<?php
require_once APP_ROOT ."/Models/Product.model.php";

$id=$_GET["itemId"];
$itemProduct = get_product($id);
require_once APP_ROOT . "/views/Detail interface/index.php";
?>