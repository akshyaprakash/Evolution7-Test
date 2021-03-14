<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/our-wines' => [[['_route' => 'wines', '_controller' => 'App\\Controller\\DefaultController::wines'], null, null, null, true, false, null]],
        '/hello-world' => [[['_route' => 'app_helloworld_sayhello', '_controller' => 'App\\Controller\\HelloWorldController::sayHello'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/our\\-wines/([^/]++)(*:27)'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:62)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        27 => [[['_route' => 'wine', '_controller' => 'App\\Controller\\DefaultController::wine'], ['slug'], null, null, false, true, null]],
        62 => [
            [['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
