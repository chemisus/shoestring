<?php

namespace Dragon;

use Bootstrap\Response;

class BasicResponse implements Response
{

    private $output;
    private $headers;
    private $code;

    public function __construct($output, $headers = [], $code = 200)
    {
        $this->output  = $output;
        $this->code    = $code;
        $this->headers = $headers;
    }

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