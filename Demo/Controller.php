<?php

namespace Demo;

use Shoestring\BasicResponse;

/**
 * 
 * @author Terrence Howard <chemisus@gmail.com>
 * @since Version 0.1
 */
class Controller
{

    public function home()
    {
        return new BasicResponse('home');
    }

    public function error() {
        return new BasicResponse('error', [], 404);
    }
}
