<?php

use App\Router;

if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js)$/', $_SERVER["REQUEST_URI"])) {
    return false;    // serve the requested resource as-is.
}

spl_autoload_register(function ($class){
    $class = substr($class, strlen('App\\'));
    $class = str_replace('\\', '/', $class);
    require_once __DIR__ . "/../src/$class.php";
});

require __DIR__ . '/../helpers.php';
require __DIR__ . '/../routes.php';

$router = new Router($_SERVER['REQUEST_URI']);
$match = $router->match();
if($match) {
    if(is_callable($match->getAction())) {
        call_user_func($match->getAction());
    } else {
        $class = $match->getAction()[0];
        $controller = new $class();
        $method = $match->getAction()[1];
        $controller->$method();
    }
} else {
    echo 404;
}