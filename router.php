<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    URL_ROOT . URL_SUBFOLDER. '/' => APP_ROOT. '/controllers/home/index.controller.php',
    URL_ROOT . URL_SUBFOLDER. '/Home' => APP_ROOT. '/controllers/home/index.controller.php',
    URL_ROOT . URL_SUBFOLDER. '/SignUp'=>APP_ROOT. '/controllers/SignUp/SignUp_controller.php',

];

if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
} else {
    echo "khong tim thay trang";
}
