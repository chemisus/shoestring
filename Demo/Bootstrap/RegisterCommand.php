<?php

namespace Demo\Bootstrap;

use Exception;

class RegisterCommand implements \Bootstrap\RegisterCommand
{

    public function execute()
    {
        return spl_autoload_register(
            function ($class) {
                $file = str_replace('\\', '/', $class) . '.php';

                if (!is_file($file))
                {
                    throw new Exception("File {$file} does not exist.");
                }

                require_once($file);
            }
        );
    }

}
