<?php

function bootstrap($base)
{
    require_once($base . '/Bootstrap/RegisterCommand.php');
    require_once($base . '/Demo/Bootstrap/RegisterCommand.php');

    $register = new \Demo\Bootstrap\RegisterCommand($base);

    $register->execute();
}
