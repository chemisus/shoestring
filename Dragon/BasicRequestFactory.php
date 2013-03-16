<?php

namespace Dragon;

use Bootstrap\Request;

class BasicRequestFactory
{

    const METHOD   = 'REQUEST_METHOD';
    const PATH     = 'PATH_INFO';
    const PROTOCOL = 'SERVER_PROTOCOL';

    private $body;
    private $method;
    private $path;
    private $protocol;

    /**
     * 
     * @param string $method
     * @param string $path
     * @param string $protocol
     * @param callable $body
     */
    public function __construct($body, $method = self::METHOD,
                                $path = self::PATH, $protocol = self::PROTOCOL)
    {
        $this->body     = $body;
        $this->method   = $method;
        $this->path     = $path;
        $this->protocol = $protocol;
    }

    /**
     * 
     * @param array $server
     * @param array $get
     * @param array $post
     * @param array $files
     * @param array $session
     * @param array $env
     * @param array $cookie
     * @return Request
     */
    public function createRequest($server, $get, $post, $files, $session, $env,
                                  $cookie)
    {
        $body       = $this->body;
        $form       = $post;
        $headers    = [];
        $method     = isset($server[$this->method]) ? $server[$this->method] : '';
        $path       = isset($server[$this->path]) ? $server[$this->path] : '';
        $protocol   = isset($server[$this->protocol]) ? $server[$this->protocol]
                : '';
        $parameters = $get;

        return new BasicRequest($body, $form, $headers, $method, $parameters,
            $path, $protocol);
    }

}
