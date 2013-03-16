<?php

namespace Shoestring;

use Bootstrap\Request;
use Bootstrap\Response;
use Bootstrap\Route;
use Bootstrap\Router;

/**
 * 
 * @author Terrence Howard <chemisus@gmail.com>
 * @since Version 0.1
 */
class BasicRouter implements Router
{

    /**
     *
     * @var array
     */
    private $routes;

    /**
     *
     * @var Route
     */
    private $otherwise;

    /**
     * 
     * @param array $routes
     * @param Route $otherwise
     */
    public function __construct(array $routes, Route $otherwise)
    {
        $this->routes = $routes;

        $this->otherwise = $otherwise;
    }

    /**
     * 
     * @param Request $request
     * @return Response
     */
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
