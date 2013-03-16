<?php

namespace Dragon;

use Bootstrap\Request;
use Bootstrap\Route;
use Bootstrap\Router;

class BasicRouter implements Router
{

    private $routes;
    private $otherwise;

    public function __construct(array $routes, Route $otherwise)
    {
        $this->routes = $routes;

        $this->otherwise = $otherwise;
    }

    public function route(Request $request)
    {
        foreach ($this->routes as $route)
        {
            $response = $route->execute($request);

            if ($response !== false)
            {
                return $response;
            }
        }

        return $this->otherwise->execute($request);
    }

}
