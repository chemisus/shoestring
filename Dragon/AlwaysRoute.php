<?php

namespace Dragon;

use Bootstrap\Request;
use Bootstrap\Route;

class AlwaysRoute implements Route
{

    private $callback;

    public function __construct(callable $callback)
    {
        $this->callback = $callback;
    }

    public function execute(Request $request)
    {
        $callback = $this->callback;

        return $callback($request, $this);
    }

}
