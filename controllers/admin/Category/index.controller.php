<?php
require_once APP_ROOT ."/Models/Category.model.php";
$categories = get_all_categories();
require_once APP_ROOT . "/views/admin/Category\index.php";
?>