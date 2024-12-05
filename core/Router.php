<?php
// /core/Router.php
class Router {
    private $routes = [];

    public function addRoute($method, $uri, $controllerAction) {
        $this->routes[] = compact('method', 'uri', 'controllerAction');
    }

    public function resolve($uri, $method) {
        foreach ($this->routes as $route) {
            if ($route['uri'] == $uri && $route['method'] == $method) {
                return $route['controllerAction'];
            }
        }
        return null;
    }
}
