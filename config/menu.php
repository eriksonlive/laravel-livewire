<?php

// Tipos Menu

// El menu principal se determina como (group) este es requerido siempre a la hora de hacer el menu
// este group debe estar regido por un (children) que es la que determina el listado de items que este debe de mostrar
// cada item tambien tiene su tipo el cual es (item) o (collapse)
// item: este es identificado como un link unico
// collapse: este es identificado como un grupo de items que se abren y se cierran, este tambien cuenta con sus children de tipo (item)

return [
    [
        'id' => 'dashboard',
        'title' => 'Dashboard',
        'caption' => 'Page Example',
        'type' => 'group',
        'children' => [
            [
                'id' => 'index',
                'title' => 'Dashboard',
                'type' => 'item',
                'url' => 'dashboard',
                'icon' => '',
                'breadcrumbs' => false
            ],
            // [
            //     'id' => 'example',
            //     'title' => 'example',
            //     'type' => 'collapse',
            //     'icon' => '',
            //     'children' => [
            //         [
            //             'id' => 'example-1',
            //             'title' => 'example 1',
            //             'type' => 'item',
            //             'url' => '#',
            //             'icon' => '',
            //             'breadcrumb' => ''
            //         ]
            //     ]
            // ]
        ],
    ],
    [
        'id' => 'administration',
        'title' => 'Admin',
        'type' => 'group',
        'children' => [
            [
                'id' => 'config',
                'title' => 'Config',
                'type' => 'item',
                'url' => 'config',
                'icon' => '',
                'breadcrumbs' => false
            ],
        ]
    ]
];
