<?php

namespace Dragon;

use Bootstrap\Request;

/**
 * 
 */
class BasicRequest implements Request
{

    private $body;
    private $form;
    private $headers;
    private $method;
    private $parameters;
    private $path;
    private $protocol;

    public function __construct($body, $form, $headers, $method, $parameters,
                                $path, $protocol)
    {
        $this->body       = $body;
        $this->form       = $form;
        $this->headers    = $headers;
        $this->method     = $method;
        $this->parameters = $parameters;
        $this->path       = $path;
        $this->protocol   = $protocol;
    }

    public function body()
    {
        static $read  = false;
        static $value = null;

        if (!$read)
        {
            $body  = $this->body;
            $value = $body();
            $read  = true;
        }

        return $value;
    }

    public function form()
    {
        return $this->form;
    }

    public function headers()
    {
        return $this->headers;
    }

    public function method()
    {
        return $this->method;
    }

    public function parameters()
    {
        return $this->parameters;
    }

    public function path()
    {
        return $this->path;
    }

    public function protocol()
    {
        return $this->protocol;
    }

}