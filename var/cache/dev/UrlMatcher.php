<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'homepage', '_controller' => 'App\\Controller\\DefaultController::indexAction'], null, null, null, false, false, null]],
        '/admin/menus' => [[['_route' => 'menu_index', '_controller' => 'App\\Controller\\MenuController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/menus/new' => [[['_route' => 'menu_new', '_controller' => 'App\\Controller\\MenuController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/pages' => [[['_route' => 'page_index', '_controller' => 'App\\Controller\\PageController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/pages/new' => [[['_route' => 'page_new', '_controller' => 'App\\Controller\\PageController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/system' => [[['_route' => 'system_build', '_controller' => 'App\\Controller\\SystemController::indexAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/admin/(?'
                    .'|menus/([^/]++)(?'
                        .'|(*:196)'
                        .'|/edit(*:209)'
                        .'|(*:217)'
                    .')'
                    .'|pages/([^/]++)(?'
                        .'|(*:243)'
                        .'|/edit(*:256)'
                        .'|(*:264)'
                    .')'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        196 => [[['_route' => 'menu_show', '_controller' => 'App\\Controller\\MenuController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        209 => [[['_route' => 'menu_edit', '_controller' => 'App\\Controller\\MenuController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        217 => [[['_route' => 'menu_delete', '_controller' => 'App\\Controller\\MenuController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        243 => [[['_route' => 'page_show', '_controller' => 'App\\Controller\\PageController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        256 => [[['_route' => 'page_edit', '_controller' => 'App\\Controller\\PageController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        264 => [
            [['_route' => 'page_delete', '_controller' => 'App\\Controller\\PageController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
