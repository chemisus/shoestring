<?php

namespace Demo\Bootstrap;

use Bootstrap\Route;
use Shoestring\BasicRouter;

/**
 * 
 * @author Terrence Howard <chemisus@gmail.com>
 * @since Version 0.1
 */
class RouterFactory implements \Bootstrap\RouterFactory
{

    public function createRouter(array $routes, Route $otherwise)
    {
        $router = new BasicRouter($routes, $otherwise);

        return $router;
    }

}
