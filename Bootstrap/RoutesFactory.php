<?php

namespace Bootstrap;

use Bootstrap\Route;

interface RoutesFactory
{

    /**
     * 
     * @return Route[]
     */
    function createRoutes();
}
