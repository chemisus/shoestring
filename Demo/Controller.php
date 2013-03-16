<?php

namespace Demo;

use Dragon\BasicResponse;

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
