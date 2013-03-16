<?php

namespace Demo\Bootstrap;

use Bootstrap\Route;
use Dragon\BasicRouter;

class RouterFactory implements \Bootstrap\RouterFactory
{

    public function createRouter(array $routes, Route $otherwise)
    {
        $router = new BasicRouter($routes, $otherwise);

        return $router;
    }

}
