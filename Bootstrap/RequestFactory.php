<?php

namespace Bootstrap;

use Bootstrap\Request;

interface RequestFactory
{

    /**
     * 
     * @return Request
     */
    function createRequest();
}
