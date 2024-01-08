<?php
require_once APP_ROOT ."/Models/Order.model.php";
require_once APP_ROOT ."/Models/OrderItem.model.php";
$order_item = get_order_item_by_order_id($_GET["id"]);
$entity =
["id"=> $_GET["id"],
"amount"=>$_GET["amount"],
"order_item_id"=>$order_item["id"],
"update_at"=>new DateTime()];
update_order($entity);
update_order_item($entity);
header("Location: /".URL_SUBFOLDER ."/Admin/Order");
?>