<?php
require_once APP_ROOT . "/Models/ProductModel.php";
require_once APP_ROOT . "/Models/CategoryModel.php";
require_once APP_ROOT . "/Models/CartModel.php";

class UserProductController
{
    public static function index()
    {
        $categoryId = $_GET['category_id'];
        $category = CategoryModel::get_category($categoryId);
        $products = ProductModel::get_product_by_category_id($categoryId);
        $userId = $_SESSION['userId'] ?? 1;
        $cart = CartModel::get_cart($userId);
        require_once APP_ROOT . "/views/menu\menu.php";
    }
    public static function detail()
    {
        $id = $_GET["itemId"];
        $itemProduct = ProductModel::get_product($id);
        require_once APP_ROOT . "/views/Detail interface/index.php";
    }
}
