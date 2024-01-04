<?php
require_once APP_ROOT ."/Models/Category.model.php";

$id=$_GET["id"];
$category = get_category($id);
require_once APP_ROOT . "/views/admin/Category\update.php";
?>