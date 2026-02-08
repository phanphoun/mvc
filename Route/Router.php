<?php

class Router
{
    private static $routes = [];

    public static function get($uri, $controller)
    {
        self::$routes['GET'][$uri] = $controller;
    }

    public static function post($uri, $controller)
    {
        self::$routes['POST'][$uri] = $controller;
    }

    public static function route()
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $uri = parse_url($_SERVER['REQUEST_URI'])['path'];

        // First check for exact match
        if (isset(self::$routes[$method]) && array_key_exists($uri, self::$routes[$method])) {
            $controller = new self::$routes[$method][$uri][0];
            $action = self::$routes[$method][$uri][1];
            $controller->$action();
            return;
        }

        // No route found, show 404
        require_once __DIR__ . '/../views/partial/error_404.php';
    }

}