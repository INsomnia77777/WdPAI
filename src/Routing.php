<?php
declare(strict_types=1);

namespace App;

final class Routing
{
    private array $routes = [];

    public function get(string $path, string $controller, string $action): void
    {
        $this->routes['GET'][$path] = [
            'controller' => $controller,
            'action' => $action
        ];
    }

    public function dispatch(string $method, string $uri): bool
    {
        $path = parse_url($uri, PHP_URL_PATH) ?: '/';
        if ($path !== '/') {
            $path = rtrim($path, '/');
        }

        if (!isset($this->routes[$method])) {
            return false;
        }

        foreach ($this->routes[$method] as $routePath => $target) {
            $pattern = preg_replace('#\{[a-zA-Z0-9_]+\}#', '([^/]+)', $routePath);
            if (preg_match('#^' . $pattern . '$#', $path, $matches)) {
                array_shift($matches);
                $params = array_map(
                    static fn(string $param): int|string => is_numeric($param) ? (int)$param : $param,
                    $matches
                );

                $controllerClass = $target['controller'];
                $action = $target['action'];
                $controllerInstance = new $controllerClass();
                $controllerInstance->$action(...$params);

                return true;
            }
        }

        return false;
    }
}