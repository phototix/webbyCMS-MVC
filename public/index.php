<?php  
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// /public/index.php
require_once '../core/Autoload.php';
Autoload::register();

$config = require '../config/config.php';
$db = Database::getInstance($config['db']);

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