<?php

namespace Dragon;

use Bootstrap\Request;
use Bootstrap\Response;
use Bootstrap\Route;

/**
 * 
 * @author Terrence Howard <chemisus@gmail.com>
 * @since Version 0.1
 */
class AlwaysRoute implements Route
{

    /**
     *
     * @var callable
     */
    private $callback;

    /**
     * 
     * @param callable $callback
     */
    public function __construct(callable $callback)
    {
        $this->callback = $callback;
    }

    /**
     * 
     * @param Request $request
     * @return Response
     */
    public function execute(Request $request)
    {
        $callback = $this->callback;

        return $callback($request, $this);
    }

}
