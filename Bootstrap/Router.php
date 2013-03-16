<?php

namespace Bootstrap;

use Bootstrap\Request;
use Bootstrap\Route;

interface Router
{

    /**
     * 
     * @param \Bootstrap\Reqest $request
     * @return Route
     */
    function route(Request $request);
}
