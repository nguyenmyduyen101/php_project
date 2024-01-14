<?php
require_once APP_ROOT . "/controllers/home/HomeController.php";
require_once APP_ROOT . "/controllers/admin/Category/CategoryController.php";


$uri = parse_url($_SERVER['REQUEST_URI']);
$path = rtrim($uri['path'], '/');
$queryParams = $uri['query'] ?? '';

$routes = [
    URL_ROOT . URL_SUBFOLDER . '/' => APP_ROOT . '/controllers/home/HomeController.php',
    URL_ROOT . URL_SUBFOLDER . '/Home' => APP_ROOT . '/controllers/home/HomeController.php',
    URL_ROOT . URL_SUBFOLDER . '/Admin/Category' => APP_ROOT . '/controllers/admin/Category/index.controller.php',
    URL_ROOT . URL_SUBFOLDER . '/Admin/Category/Create' => APP_ROOT . '/controllers/admin/Category/create.controller.php',
    URL_ROOT . URL_SUBFOLDER . '/Admin/Category/CreatePost' => APP_ROOT . '/controllers/admin/Category/createPost.controller.php',
    URL_ROOT . URL_SUBFOLDER . '/Admin/Category/Update' => APP_ROOT . '/controllers/admin/Category/update.controller.php',
    URL_ROOT . URL_SUBFOLDER . '/Admin/Category/UpdatePost' => APP_ROOT . '/controllers/admin/Category/updatePost.controller.php',
    URL_ROOT . URL_SUBFOLDER . '/Admin/Category/Delete' => APP_ROOT . '/controllers/admin/Category/delete.controller.php',
    URL_ROOT . URL_SUBFOLDER . '/Admin/Order' => APP_ROOT . '/controllers/admin/Order/index.controller.php',
    URL_ROOT . URL_SUBFOLDER . '/Admin/Order/Create' => APP_ROOT . '/controllers/admin/Order/create.controller.php',
    URL_ROOT . URL_SUBFOLDER . '/Admin/Order/CreatePost' => APP_ROOT . '/controllers/admin/Order/createPost.controller.php',
    URL_ROOT . URL_SUBFOLDER . '/Admin/Order/Update' => APP_ROOT . '/controllers/admin/Order/update.controller.php',
    URL_ROOT . URL_SUBFOLDER . '/Admin/Order/UpdatePost' => APP_ROOT . '/controllers/admin/Order/updatePost.controller.php',
    URL_ROOT . URL_SUBFOLDER . '/Admin/Order/Delete' => APP_ROOT . '/controllers/admin/Order/delete.controller.php',

    URL_ROOT . URL_SUBFOLDER . '/Account/Login' => APP_ROOT . '/controllers/account/login.controller.php',

    URL_ROOT . URL_SUBFOLDER . '/Menu' => APP_ROOT . '/controllers/menu/index.controller.php',
    URL_ROOT . URL_SUBFOLDER . '/Products' => APP_ROOT . '/controllers/product/index.controller.php',
    URL_ROOT . URL_SUBFOLDER . "/Checkout" => APP_ROOT . '/controllers/Checkout/checkout.controller.php',
    URL_ROOT . URL_SUBFOLDER . "/CheckoutPost" => APP_ROOT . '/controllers/Checkout/CheckoutPost.controller.php',
    URL_ROOT . URL_SUBFOLDER . "/Order" => APP_ROOT . '/controllers/Order/order.controller.php',

    URL_ROOT . URL_SUBFOLDER . '/Admin/Product' => APP_ROOT . '/controllers/admin/Product/index.controller.php',
    URL_ROOT . URL_SUBFOLDER . '/Admin/Product/Create' => APP_ROOT . '/controllers/admin/Product/create.controller.php',
    URL_ROOT . URL_SUBFOLDER . '/Admin/Product/CreatePost' => APP_ROOT . '/controllers/admin/Product/createPost.controller.php',
    URL_ROOT . URL_SUBFOLDER . '/Admin/Product/Update' => APP_ROOT . '/controllers/admin/Product/update.controller.php',
    URL_ROOT . URL_SUBFOLDER . '/Admin/Product/UpdatePost' => APP_ROOT . '/controllers/admin/Product/updatePost.controller.php',
    URL_ROOT . URL_SUBFOLDER . '/Admin/Product/Delete' => APP_ROOT . '/controllers/admin/Product/delete.controller.php',
    URL_ROOT . URL_SUBFOLDER . '/Admin/Product/update1' => APP_ROOT . '/controllers/admin/Product/update1.controller.php',
    URL_ROOT . URL_SUBFOLDER . '/Admin/Product/Insert' => APP_ROOT . '/controllers/admin/Product/insert.controller.php',
    URL_ROOT . URL_SUBFOLDER . '/Admin/Product/insert1' => APP_ROOT . '/controllers/admin/Product/insert1.controller.php',

    URL_ROOT . URL_SUBFOLDER . '/Admin/Order' => APP_ROOT . '/controllers\admin\Order\order.controller.php',
    URL_ROOT . URL_SUBFOLDER . '/order/order_success' => APP_ROOT . '/controllers\Order\order_success.controller.php',


];
switch (strtolower($path) ?? '') {
    case '':
    case strtolower(URL_ROOT . URL_SUBFOLDER . '/home'):
        HomeController::index();
        break;
    case strtolower(URL_ROOT . URL_SUBFOLDER . '/admin/category'):
        CategoryController::index();
        break;
    case strtolower(URL_ROOT . URL_SUBFOLDER . '/Admin/Category/Create'):
        CategoryController::create();
        break;
    case strtolower(URL_ROOT . URL_SUBFOLDER . '/Admin/Category/CreatePost'):
        CategoryController::createPost();
        break;
    case strtolower(URL_ROOT . URL_SUBFOLDER . '/Admin/Category/Delete'):
        CategoryController::delete();
        break;
    case strtolower(URL_ROOT . URL_SUBFOLDER . '/Admin/Category/Update'):
        CategoryController::update();
        break;
    case strtolower(URL_ROOT . URL_SUBFOLDER . '/Admin/Category/UpdatePost'):
        CategoryController::updatePost();
        break;

    default:
        echo "khong tim thay trang";
        break;
}
