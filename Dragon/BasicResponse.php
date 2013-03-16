<?php

namespace Dragon;

use Bootstrap\Response;

/**
 * 
 * @author Terrence Howard <chemisus@gmail.com>
 * @since Version 0.1
 */
class BasicResponse implements Response
{

    /**
     *
     * @var mixed
     */
    private $output;

    /**
     *
     * @var array
     */
    private $headers;

    /**
     *
     * @var integer
     */
    private $code;

    /**
     * 
     * @param mixed $output
     * @param array $headers
     * @param integer $code
     */
    public function __construct($output, $headers = [], $code = 200)
    {
        $this->output  = $output;
        $this->code    = $code;
        $this->headers = $headers;
    }

    /**
     * 
     */
    public function execute()
    {
        http_response_code($this->code);

        foreach ($this->headers as $key => $value)
        {
            header("{$key}: {$value}");
        }

        print_r($this->output);
    }

}