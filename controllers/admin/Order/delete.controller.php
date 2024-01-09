<?php
require_once APP_ROOT ."/Models/Order.model.php";
// require_once APP_ROOT ."/Models/OrderItem.model.php";
$id=$_GET["id"];
remove_order($id);
header("Location: /".URL_SUBFOLDER ."/Admin/Order");

?>