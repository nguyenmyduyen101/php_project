<?php
require_once APP_ROOT ."/Models/Product.model.php";
 $ID = $_GET['id'];
remove_product($ID);
header("Location: /".URL_SUBFOLDER ."/Admin/Product");

?>