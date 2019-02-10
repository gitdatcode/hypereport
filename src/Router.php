<?php

namespace HypeReport;

class Router
{
    private $server;

    public function __construct()
    {
        $this->server = $_SERVER;
    }

    public function run()
    {
        require config('basePath') . '/routes.php';

        $httpMethod = $_SERVER['REQUEST_METHOD'];
        $uri = $_SERVER['REQUEST_URI'];
        
        // Strip query string (?foo=bar) and decode URI
        if (false !== $pos = strpos($uri, '?')) {
            $uri = substr($uri, 0, $pos);
        }
        $uri = rawurldecode($uri);

        $routeInfo = $router->dispatch($httpMethod, $uri);
        
        switch ($routeInfo[0]) {
            case \FastRoute\Dispatcher::FOUND:
                $handler = explode('@', $routeInfo[1]);
                $controller = new $handler[0];
                $method = $handler[1];
                $controller->$method(...array_values($routeInfo[2]));

                break;
            case \FastRoute\Dispatcher::NOT_FOUND:
                dd('where girl');
                break;
            case \FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
                $allowedMethods = $routeInfo[1];
                // ... 405 Method Not Allowed
                dd('oh no girl');
                break;
        }
    }

    private function route($keyword)
    {
        $routes = config('routes');
        if (in_array($keyword, array_keys($routes))) {
            $route = explode('@', $routes[$keyword]);
            $class = $route[0];
            $function = $route[1];
            $class = new $class($this->capsule);
            $class->$function($this->server);
            return;
        } else {
            throw new \RuntimeException('Route not found.');
        }
    }
}
