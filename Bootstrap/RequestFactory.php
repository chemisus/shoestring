<?php

namespace Bootstrap;

use Bootstrap\Request;

/**
 * 
 * @author Terrence Howard <chemisus@gmail.com>
 * @since Version 0.1
 */
interface RequestFactory
{

    /**
     * 
     * @return Request
     */
    function createRequest();
}
