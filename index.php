<?php

function run(\Bootstrap\RequestFactory $requestFactory,
             \Bootstrap\RoutesFactory $routesFactory,
             \Bootstrap\OtherwiseFactory $otherwiseFactory,
             \Bootstrap\RouterFactory $routerFactory)
{
    $request = $requestFactory->createRequest();

    $routes = $routesFactory->createRoutes();

    $otherwise = $otherwiseFactory->createOtherwise();

    $router = $routerFactory->createRouter($routes, $otherwise);

    $response = $router->route($request);

    $response->execute();
}

function main()
{
    require_once 'bootstrap.php';
    
    bootstrap(__DIR__);

    run(new \Demo\Bootstrap\RequestFactory(),
        new \Demo\Bootstrap\RoutesFactory(),
        new \Demo\Bootstrap\OtherwiseFactory(),
        new \Demo\Bootstrap\RouterFactory()
    );
}

call_user_func(
    function () {
        $start = microtime();

        main();

        $end = microtime();

        $started = explode(' ', $start);
        $ended   = explode(' ', $end);

        $diff = [
            round($ended[0] * 10000000) - round($started[0] * 10000000),
            round($ended[1] * 10000000) - round($started[1] * 10000000)
        ];

        //echo array_sum($diff) . '&micro;s';
    }
);
