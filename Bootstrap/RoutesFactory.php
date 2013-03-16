<?php

namespace Bootstrap;

use Bootstrap\Route;

/**
 * 
 * @author Terrence Howard <chemisus@gmail.com>
 * @since Version 0.1
 */
interface RoutesFactory
{

    /**
     * 
     * @return Route[]
     */
    function createRoutes();
}
