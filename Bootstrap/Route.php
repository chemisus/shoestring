<?php

namespace Bootstrap;

use Bootstrap\Request;
use Bootstrap\Response;

/**
 * 
 * @author Terrence Howard <chemisus@gmail.com>
 * @since Version 0.1
 */
interface Route
{

    /**
     * 
     * @param Request $request
     * @return Response
     */
    function execute(Request $request);
}
