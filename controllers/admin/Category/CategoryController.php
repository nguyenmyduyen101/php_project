<?php
require_once APP_ROOT . "/Models/CategoryModel.php";
class CategoryController
{
    public static function index()
    {
        $categories = CategoryModel::get_all_categories();
        require_once APP_ROOT . "/views/admin/Category\index.php";
    }
    public static function create()
    {
        require_once APP_ROOT . "/views/admin/Category\create.php";
    }
    public static function createPost()
    {
        require_once APP_ROOT . "/Models/CategoryModel.php";
        $entity =
            [
                "name" => $_POST["name"],
                "create_at" => new DateTime(),
                "update_at" => null
            ];
        CategoryModel::add_Category($entity);
        header("Location: /" . URL_SUBFOLDER . "/Admin/Category");
    }
    public static function delete()
    {
        require_once APP_ROOT . "/Models/CategoryModel.php";
        $id = $_GET["id"];
        CategoryModel::remove_category($id);
        header("Location: /" . URL_SUBFOLDER . "/Admin/Category");
    }
    public static function update()
    {
        require_once APP_ROOT . "/Models/CategoryModel.php";
        $id = $_GET["id"];
        $category = CategoryModel::get_category($id);
        require_once APP_ROOT . "/views/admin/Category\update.php";
    }
    public static function updatePost()
    {
        require_once APP_ROOT . "/Models/CategoryModel.php";
        $entity =
            [
                "name" => $_POST["name"],
                "create_at" => new DateTime($_POST["create_at"]),
                "id" => $_POST["id"],
                "update_at" => new DateTime()
            ];
        CategoryModel::update_category($entity);
        header("Location: /" . URL_SUBFOLDER . "/Admin/Category");
    }
}
