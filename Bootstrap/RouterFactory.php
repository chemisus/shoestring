<?php

namespace Bootstrap;

use Bootstrap\Route;

interface RouterFactory
{

    /**
     * 
     * @param Route[] $routes
     * @param Route $otherwise
     */
    function createRouter(array $routes, Route $otherwise);
}
