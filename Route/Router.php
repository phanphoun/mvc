<?php

class Router {
    private static $routes = [];
    
    public static function get($path, $handler) {
        self::$routes['GET'][$path] = $handler;
    }
    
    public static function post($path, $handler) {
        self::$routes['POST'][$path] = $handler;
    }
    
    public static function route() {
        $method = $_SERVER['REQUEST_METHOD'];
        $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        
        if (isset(self::$routes[$method][$path])) {
            $handler = self::$routes[$method][$path];
            if (is_array($handler)) {
                $controller = new $handler[0]();
                $method = $handler[1];
                $controller->$method();
            }
        } else {
            http_response_code(404);
            echo "404 - Page not found";
        }
    }
}