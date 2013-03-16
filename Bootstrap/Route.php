<?php

namespace Bootstrap;

use Bootstrap\Request;
use Bootstrap\Response;

interface Route
{

    /**
     * 
     * @param Request $request
     * @return Response
     */
    function execute(Request $request);
}
