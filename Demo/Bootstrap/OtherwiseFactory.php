<?php

namespace Demo\Bootstrap;

use Bootstrap\Request;
use Bootstrap\Route;
use Dragon\AlwaysRoute;
use Demo\Controller;

class OtherwiseFactory implements \Bootstrap\OtherwiseFactory
{

    function createOtherwise()
    {
        $otherwise = new AlwaysRoute(
            function (Request $request, Route $route) {
                $controller = new Controller();

                return $controller->error();
            }
        );

        return $otherwise;
    }

}
