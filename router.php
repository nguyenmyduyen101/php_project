<?php
require_once APP_ROOT . "/controllers/home/HomeController.php";
require_once APP_ROOT . "/controllers/Menu/MenuController.php";
require_once APP_ROOT . "/controllers/admin/Category/CategoryController.php";
require_once APP_ROOT . "/controllers/admin/Order/OrderController.php";
require_once APP_ROOT . "/controllers/admin/Product/ProductController.php";
require_once APP_ROOT . "/controllers/account/LoginController.php";
require_once APP_ROOT . "/controllers/account/SignUpController.php";
require_once APP_ROOT . "/controllers/Order/OrderItemController.php";
require_once APP_ROOT . "/controllers/product/UserProductController.php";
require_once APP_ROOT . "/controllers/Cart/CartController.php";
require_once APP_ROOT . "/controllers/Checkout/CheckoutController.php";


$uri = parse_url($_SERVER['REQUEST_URI']);
$path = rtrim($uri['path'], '/');
$queryParams = $uri['query'] ?? '';

switch (strtolower($path) ?? '') {
    case strtolower('/'.URL_SUBFOLDER):
        //Home
    case strtolower(URL_ROOT . URL_SUBFOLDER . '/Home'):
        HomeController::index();
        break;
        //Menu
    case strtolower(URL_ROOT . URL_SUBFOLDER . '/Products'):
        UserProductController::index();
        break;
        //user product
    case strtolower(URL_ROOT . URL_SUBFOLDER . '/Product/detail'):
        UserProductController::detail();
        break;
        //Category
    case strtolower(URL_ROOT . URL_SUBFOLDER . '/Admin/Category'):
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
        //Order
    case strtolower(URL_ROOT . URL_SUBFOLDER . '/Admin/Order'):
        OrderController::index();
        break;
    case strtolower(URL_ROOT . URL_SUBFOLDER . '/Admin/Order/Delete'):
        OrderController::delete();
        break;
    case strtolower(URL_ROOT . URL_SUBFOLDER . '/Admin/Order/Update'):
        OrderController::update();
        break;
    case strtolower(URL_ROOT . URL_SUBFOLDER . '/Admin/Order/UpdatePost'):
        OrderController::updatePost();
        break;
        //Product    
    case strtolower(URL_ROOT . URL_SUBFOLDER . '/Admin/Product'):
        ProductController::index();
        break;
    case strtolower(URL_ROOT . URL_SUBFOLDER . '/Admin/Product/Delete'):
        ProductController::delete();
        break;
    case strtolower(URL_ROOT . URL_SUBFOLDER . '/Admin/Product/Insert'):
        ProductController::insert();
        break;
    case strtolower(URL_ROOT . URL_SUBFOLDER . '/Admin/Product/insert1'):
        ProductController::insert1();
        break;
    case strtolower(URL_ROOT . URL_SUBFOLDER . '/Admin/Product/Update'):
        ProductController::update();
        break;
    case strtolower(URL_ROOT . URL_SUBFOLDER . '/Admin/Product/update1'):
        ProductController::update1();
        break;
        //Login
    case strtolower(URL_ROOT . URL_SUBFOLDER . '/Account/Login'):
        LoginController::index();
        break;
        //register
    case strtolower(URL_ROOT . URL_SUBFOLDER . '/Account/SignUp'):
        SignUpController::signup();
        break;
        //orderItem
    case strtolower(URL_ROOT . URL_SUBFOLDER . '/Order'):
        OrderItemController::index();
        break;
    case strtolower(URL_ROOT . URL_SUBFOLDER . '/order/order_success'):
        OrderItemController::success();
        break;
        //Cart
    case strtolower(URL_ROOT . URL_SUBFOLDER . '/carts'):
        CartController::index();
        break;
    case strtolower(URL_ROOT . URL_SUBFOLDER . '/carts/Delete'):
        CartController::delete();
        break;
    case strtolower(URL_ROOT . URL_SUBFOLDER . '/Cart/updateCart'):
        CartController::update();
        break;
    case strtolower(URL_ROOT . URL_SUBFOLDER . '/addToCart'):
        CartController::add();
        break;
        //checkout
    case strtolower(URL_ROOT . URL_SUBFOLDER . '/Checkout'):
        CheckoutController::Checkout();
        break;
    default:
        echo "khong tim thay trang";
        break;
}
