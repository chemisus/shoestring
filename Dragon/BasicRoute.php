<?php

namespace Dragon;

use Bootstrap\Request;
use Bootstrap\Route;

/**
 * 
 * @author Terrence Howard <chemisus@gmail.com>
 * @since Version 0.1
 */
class BasicRoute implements Route
{

    /**
     *
     * @var callable
     */
    private $callback;

    /**
     *
     * @var string
     */
    private $method;

    /**
     *
     * @var string
     */
    private $path;

    /**
     * 
     * @param string $method
     * @param string $path
     * @param callable $callback
     */
    public function __construct($method, $path, callable $callback)
    {
        $this->method   = $method;
        $this->path     = $path;
        $this->callback = $callback;
    }

    /**
     * 
     * @param Request $request
     * @return boolean
     */
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
