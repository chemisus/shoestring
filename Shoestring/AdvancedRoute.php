<?php

namespace Shoestring;

use Bootstrap\Route;

class AdvancedRoute implements Route
{

    private $route;

    public function __construct($method, $path, $callback)
    {
        $this->route = new BasicRoute($method, $this->translate($path), $callback);
    }

    /**
     * 
     * @param type $value
     * @return type
     */
    public function translate($value)
    {
        return '/'.strtr($value, [
            '/' => '\/',
            '.' => '\.',
            '[' => '(',
            ']' => ')?',
            '<' => '(?P<',
            '>' => '>.+?)',
        ]).'/';
    }

    public function execute(\Bootstrap\Request $request)
    {
        return $this->route->execute($request);
    }

}