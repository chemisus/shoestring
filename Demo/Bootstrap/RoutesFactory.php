<?php

namespace Demo\Bootstrap;

use Bootstrap\Request;
use Bootstrap\Route;
use Demo\Controller;
use Dragon\BasicRoute;

class RoutesFactory implements \Bootstrap\RoutesFactory
{

    public function createRoutes()
    {
        $routes = [
            new BasicRoute('GET', '/^\/?home\/?$/',
                function (array $matches, Request $request, Route $route) {
                    $controller = new Controller();

                    return $controller->home();
                }
            ),
        ];

        return $routes;
    }

}
