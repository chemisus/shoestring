<?php

namespace Dragon;

use Bootstrap\Request;
use Bootstrap\Route;

class BasicRoute implements Route
{

    private $callback;
    private $method;
    private $path;

    public function __construct($method, $path, callable $callback)
    {
        $this->method   = $method;
        $this->path     = $path;
        $this->callback = $callback;
    }

    public function execute(Request $request)
    {
        if ($request->method() !== $this->method)
        {
            return false;
        }

        $matches = array();

        if (!preg_match($this->path, $request->path(), $matches))
        {
            return false;
        }

        $callback = $this->callback;

        return $callback($matches, $request, $this);
    }

}
