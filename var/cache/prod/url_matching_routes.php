<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'contrat_index', '_controller' => 'App\\Controller\\ContratController::index'], null, ['GET' => 0], null, false, false, null]],
        '/new' => [[['_route' => 'contrat_new', '_controller' => 'App\\Controller\\ContratController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/([^/]++)(?'
                    .'|/edit(*:24)'
                    .'|(*:31)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => 'contrat_edit', '_controller' => 'App\\Controller\\ContratController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        31 => [
            [['_route' => 'contrat_delete', '_controller' => 'App\\Controller\\ContratController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
