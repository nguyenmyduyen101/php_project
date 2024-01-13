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

}


