<?php

namespace Bootstrap;

use Bootstrap\Route;

/**
 * 
 * @author Terrence Howard <chemisus@gmail.com>
 * @since Version 0.1
 */
interface RouterFactory
{

    /**
     * 
     * @param Route[] $routes
     * @param Route $otherwise
     */
    function createRouter(array $routes, Route $otherwise);
}
