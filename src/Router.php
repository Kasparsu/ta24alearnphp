<?php
namespace App;

class Router {
    /** @var Route[] $routes */
    private static $routes = [];
    public static function addRoute(string $path, callable|array $action) {
        self::$routes[] = new Route($path, $action); 
    }
    public static function getRoutes(){
        return self::$routes;
    }

    public function __construct(private $path)
    {
        $this->path = parse_url($this->path, PHP_URL_PATH);
    }

    public function match(): Route | false {
        foreach(self::$routes as $route) {
            if($route->getPath() === $this->path) {
                return $route;
            } 
        }
        return false;
    }
}