<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'contrat_index' => [[], ['_controller' => 'App\\Controller\\ContratController::index'], [], [['text', '/']], [], []],
    'contrat_new' => [[], ['_controller' => 'App\\Controller\\ContratController::new'], [], [['text', '/new']], [], []],
    'contrat_edit' => [['id'], ['_controller' => 'App\\Controller\\ContratController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true]], [], []],
    'contrat_delete' => [['id'], ['_controller' => 'App\\Controller\\ContratController::delete'], [], [['variable', '/', '[^/]++', 'id', true]], [], []],
];
