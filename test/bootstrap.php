<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * @author chemisus
 */
// TODO: check include path
//ini_set('include_path', ini_get('include_path'));
// put your code here

function bootstrap()
{
    $base = dirname(__DIR__);

    require_once($base . '/Bootstrap/RegisterCommand.php');
    require_once($base . '/Demo/Bootstrap/RegisterCommand.php');
    
    $register = new \Demo\Bootstrap\RegisterCommand($base);

    $register->execute();
}

bootstrap();
