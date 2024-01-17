<?php 
require_once APP_ROOT ."/Models/ProductModel.php";
require_once APP_ROOT ."/Models/CategoryModel.php";
class UserProductController{
    public static function index(){
        $categoryId = $_GET['category_id'];
        $category = CategoryModel::get_category($categoryId);
        $products = ProductModel::get_product_by_category_id($categoryId);
        require_once APP_ROOT . "/views/menu\menu.php";
    }
}
 ?>
