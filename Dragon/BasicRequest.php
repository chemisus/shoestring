<?php

namespace Dragon;

use Bootstrap\Request;


/**
 * 
 * @author Terrence Howard <chemisus@gmail.com>
 * @since Version 0.1
 */
class BasicRequest implements Request
{

    /**
     *
     * @var callable
     */
    private $body;

    /**
     *
     * @var array
     */
    private $form;

    /**
     *
     * @var array
     */
    private $headers;

    /**
     *
     * @var string
     */
    private $method;

    /**
     *
     * @var array
     */
    private $parameters;

    /**
     *
     * @var string
     */
    private $path;

    /**
     *
     * @var string
     */
    private $protocol;

    /**
     * 
     * @param callable $body
     * @param array $form
     * @param array $headers
     * @param string $method
     * @param array $parameters
     * @param string $path
     * @param string $protocol
     */
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

    /**
     * 
     * @staticvar boolean $read
     * @staticvar string $value
     * @return string
     */
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

    /**
     * 
     * @return array
     */
    public function form()
    {
        return $this->form;
    }

    /**
     * 
     * @return array
     */
    public function headers()
    {
        return $this->headers;
    }

    /**
     * 
     * @return string
     */
    public function method()
    {
        return $this->method;
    }

    /**
     * 
     * @return array
     */
    public function parameters()
    {
        return $this->parameters;
    }

    /**
     * 
     * @return string
     */
    public function path()
    {
        return $this->path;
    }

    /**
     * 
     * @return string
     */
    public function protocol()
    {
        return $this->protocol;
    }

}