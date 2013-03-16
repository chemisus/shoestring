<?php

namespace Demo\Bootstrap;

use Shoestring\BasicRequestFactory;

/**
 * 
 * @author Terrence Howard <chemisus@gmail.com>
 * @since Version 0.1
 */
class RequestFactory implements \Bootstrap\RequestFactory
{

    public function createRequest()
    {
        $requestFactory = new BasicRequestFactory(
            function () {
                return file_get_contents('php://input');
            }
        );

        $server  = $_SERVER;
        $get     = $_GET;
        $post    = $_POST;
        $files   = $_FILES;
        $session = isset($_SESSION) ? $_SESSION : [];
        $env     = $_ENV;
        $cookie  = $_COOKIE;

        $request = $requestFactory->createRequest($server, $get, $post, $files,
            $session, $env, $cookie);

        return $request;
    }

}
