<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    URL_ROOT . URL_SUBFOLDER . '/' => APP_ROOT . '/controllers/home/index.controller.php',
    URL_ROOT . URL_SUBFOLDER . '/Home' => APP_ROOT . '/controllers/home/index.controller.php',
    URL_ROOT . URL_SUBFOLDER . '/Admin/Category' => APP_ROOT . '/controllers/admin/Category/index.controller.php',
    URL_ROOT . URL_SUBFOLDER . '/Admin/Category/Create' => APP_ROOT . '/controllers/admin/Category/create.controller.php',
    URL_ROOT . URL_SUBFOLDER . '/Admin/Category/CreatePost' => APP_ROOT . '/controllers/admin/Category/createPost.controller.php',
    URL_ROOT . URL_SUBFOLDER . '/Admin/Category/Update' => APP_ROOT . '/controllers/admin/Category/update.controller.php',
    URL_ROOT . URL_SUBFOLDER . '/Admin/Category/UpdatePost' => APP_ROOT . '/controllers/admin/Category/updatePost.controller.php',
    URL_ROOT . URL_SUBFOLDER . '/Admin/Category/Delete' => APP_ROOT . '/controllers/admin/Category/delete.controller.php',
    URL_ROOT . URL_SUBFOLDER . '/Account/Login' => APP_ROOT . '/controllers/account/login.controller.php',
    URL_ROOT . URL_SUBFOLDER . '/Admin/Product' => APP_ROOT . '/controllers/admin/Product/index.controller.php',
    URL_ROOT . URL_SUBFOLDER . '/Admin/Product/Create' => APP_ROOT . '/controllers/admin/Product/create.controller.php',
    URL_ROOT . URL_SUBFOLDER . '/Admin/Product/CreatePost' => APP_ROOT . '/controllers/admin/Product/createPost.controller.php',
    URL_ROOT . URL_SUBFOLDER . '/Admin/Product/Update' => APP_ROOT . '/controllers/admin/Product/update.controller.php',
    URL_ROOT . URL_SUBFOLDER . '/Admin/Product/UpdatePost' => APP_ROOT . '/controllers/admin/Product/updatePost.controller.php',
    URL_ROOT . URL_SUBFOLDER . '/Admin/Product/Delete' => APP_ROOT . '/controllers/admin/Product/delete.controller.php',
    URL_ROOT . URL_SUBFOLDER . '/Admin/Product/update1' => APP_ROOT . '/controllers/admin/Product/update1.controller.php',
    URL_ROOT . URL_SUBFOLDER . '/Admin/Product/Insert' => APP_ROOT . '/controllers/admin/Product/insert.controller.php',
    URL_ROOT . URL_SUBFOLDER . '/Admin/Product/insert1' => APP_ROOT . '/controllers/admin/Product/insert1.controller.php',

];

if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
} else {
    echo "khong tim thay trang";
}
