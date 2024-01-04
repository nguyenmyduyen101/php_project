<?php
require_once APP_ROOT ."/Models/Category.model.php";
$entity =
["name"=> $_POST["name"],
"create_at"=>new DateTime(),
"update_at"=>null];
add_Category($entity);
header("Location: /".URL_SUBFOLDER ."/Admin/Category");
?>