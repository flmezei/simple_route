<?php
namespace Flmezei\SimpleRoute\Core\Routes;

class Route implements RouteInterface
{
    public $route;
    public $class_method;
    
    public function __construct()
    {
        $route = $this->route = $_SERVER['REQUEST_URI'];
        $classMethod = $this->class_method = $_SERVER['REQUEST_METHOD'];
    }
    static function get(string $route, array $class_method): string
    {
        return '';
    }
    static function post(string $route, array $class_method): string
    {
        return '';
    }
    static function patch(string $route, array $class_method): array
    {
        return [];
    }
    static function put(string $route, array $class_method): string
    {
        return '';
    }
    static function delete(string $route, array $class_method): string
    {
        return '';
    }
    static function resource(string $route, string $class): string
    {
        return '';
    }
}
