<?php

namespace Demo\Bootstrap;

use Bootstrap\Request;
use Bootstrap\Route;
use Shoestring\AlwaysRoute;
use Demo\Controller;

/**
 * 
 * @author Terrence Howard <chemisus@gmail.com>
 * @since Version 0.1
 */
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
