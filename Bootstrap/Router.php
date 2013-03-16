<?php

namespace Bootstrap;

use Bootstrap\Request;
use Bootstrap\Route;

/**
 * 
 * @author Terrence Howard <chemisus@gmail.com>
 * @since Version 0.1
 */
interface Router
{

    /**
     * 
     * @param \Bootstrap\Reqest $request
     * @return Route
     */
    function route(Request $request);
}
