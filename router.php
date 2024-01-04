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

];

if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
} else {
    echo "khong tim thay trang";
}
