<?php
require_once APP_ROOT ."/Models/Order.model.php";
require_once APP_ROOT ."/Models/OrderItem.model.php";
$entity =
["id"=> $_POST["id"],
"user_id"=>$_POST["user_id"],
"address"=>$_POST["address"],
"zip_code"=>$_POST["zip_code"],
"phone_no"=>$_POST["phone_no"],
"amount"=>$_POST["amount"],
"payment_mode"=>$_POST["payment_mode"],
"order_status"=>$_POST["order_status"],
"create_at"=>new DateTime($_POST["create_at"]),
"update_at"=>new DateTime()];
update_order($entity);
header("Location: /".URL_SUBFOLDER ."/Admin/Order");
?>