<?php
require_once APP_ROOT ."/Models/Category.model.php";
$entity =
["name"=> $_POST["name"],
"create_at"=>new DateTime($_POST["create_at"]),
"id"=>$_POST["id"],
"update_at"=>new DateTime()];
update_category($entity);
header("Location: /".URL_SUBFOLDER ."/Admin/Category");
?>