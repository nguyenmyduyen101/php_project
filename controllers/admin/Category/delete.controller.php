<?php
require_once APP_ROOT ."/Models/Category.model.php";

$id=$_GET["id"];
remove_category($id);
header("Location: /".URL_SUBFOLDER ."/Admin/Category");

?>