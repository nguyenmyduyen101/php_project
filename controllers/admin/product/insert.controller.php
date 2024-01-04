

<?php
require_once dirname(dirname(dirname(__DIR__))).'/Models/Category.model.php';


$categories = get_all_categories();

require_once APP_ROOT . "/views/Admin/Product\insert.php";
?>
