<?php
require_once APP_ROOT . "/Models/ProductModel.php";
require_once dirname(dirname(dirname(__DIR__))) . '/Models/CategoryModel.php';
class ProductController
{
    public static function index()
    {
        $categories = CategoryModel::get_all_categories();
        $products = ProductModel::get_all_products();
        require_once APP_ROOT . "/views/admin/Product\index.php";
    }
    public static function delete()
    {
        require_once APP_ROOT . "/Models/ProductModel.php";
        $ID = $_GET['id'];
        ProductModel::remove_product($ID);
        header("Location: /" . URL_SUBFOLDER . "/Admin/Product");
    }
    public static function insert()
    {
        require_once dirname(dirname(dirname(__DIR__))) . '/Models/CategoryModel.php';
        $categories = CategoryModel::get_all_categories();
        require_once APP_ROOT . "/views/Admin/Product\insert.php";
    }
    public static function insert1()
    {
        require_once APP_ROOT . "/Models/ProductModel.php";
        $entity =
            [
                "product_name" => $_POST["name"],
                "product_price" => $_POST["price"],
                "product_categorie_id" => $_POST["category_id"],
            ];
        ProductModel::add_product($entity);
        header("Location: /" . URL_SUBFOLDER . "/Admin/Product");
    }
    public static function update()
    {
        require_once APP_ROOT . "/Models/ProductModel.php";
        require_once dirname(dirname(dirname(__DIR__))) . '/Models/CategoryModel.php';
        $id = $_GET["id"];
        $categories = CategoryModel::get_all_categories();
        $product =  ProductModel::get_product($id);
        require_once APP_ROOT . "/views/Admin/Product\update.php";
    }
    public static function update1()
    {
        require_once APP_ROOT . "/Models/ProductModel.php";
        if (isset($_POST['update'])) {
            $entity =
                [
                    "id" => $_POST["id"],
                    "product_name" => $_POST["name"],
                    "product_price" => $_POST["price"],
                    "product_categorie_id" => $_POST["category_id"],
                ];
            ProductModel::update_product($entity);
            header("Location: /" . URL_SUBFOLDER . "/Admin/Product");
        }
    }
    public static function detail()
    {
    }
}
