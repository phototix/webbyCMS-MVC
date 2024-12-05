<?php  
// /public/index.php
require_once __DIR__ . '/../core/Autoload.php';
Autoload::register();

$config = require __DIR__ . '/../config/config.php';
$db = new Database($config['db']);

$router = new Router();
$router->addRoute('GET', '/', 'HomeController@index');

$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];
$controllerAction = $router->resolve($uri, $method);

if ($controllerAction) {
    [$controller, $action] = explode('@', $controllerAction);
    $controller = new $controller();
    $controller->$action();
} else {
    echo "404 Not Found";
}
?>