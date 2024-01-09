<?php
require_once APP_ROOT ."/Models/Order.model.php";

$id=$_GET["id"];
$order = get_order($id);

require_once APP_ROOT . "/views/admin/Order\update.php";
?>