<?php

namespace Demo\Bootstrap;

use Exception;

/**
 * 
 * @author Terrence Howard <chemisus@gmail.com>
 * @since Version 0.1
 */
class RegisterCommand implements \Bootstrap\RegisterCommand
{

    private $base;

    public function __construct($base)
    {
        $this->base = $base;
    }

    public function execute()
    {
        return spl_autoload_register(
            function ($class) {
                $file = $this->base . '/' . str_replace('\\', '/', $class) . '.php';

                if (is_file($file))
                {
                    require_once($file);
//                    throw new Exception("File {$file} does not exist.");
                }
            }
        );
    }

}
