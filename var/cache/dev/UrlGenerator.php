<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '\\d+', 'code'], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    'homepage' => [[], ['_controller' => 'App\\Controller\\DefaultController::indexAction'], [], [['text', '/']], [], []],
    'menu_index' => [[], ['_controller' => 'App\\Controller\\MenuController::index'], [], [['text', '/admin/menus/']], [], []],
    'menu_new' => [[], ['_controller' => 'App\\Controller\\MenuController::new'], [], [['text', '/admin/menus/new']], [], []],
    'menu_show' => [['id'], ['_controller' => 'App\\Controller\\MenuController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/menus']], [], []],
    'menu_edit' => [['id'], ['_controller' => 'App\\Controller\\MenuController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/menus']], [], []],
    'menu_delete' => [['id'], ['_controller' => 'App\\Controller\\MenuController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/menus']], [], []],
    'page_index' => [[], ['_controller' => 'App\\Controller\\PageController::index'], [], [['text', '/admin/pages/']], [], []],
    'page_new' => [[], ['_controller' => 'App\\Controller\\PageController::new'], [], [['text', '/admin/pages/new']], [], []],
    'page_show' => [['id'], ['_controller' => 'App\\Controller\\PageController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/pages']], [], []],
    'page_edit' => [['id'], ['_controller' => 'App\\Controller\\PageController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/pages']], [], []],
    'page_delete' => [['id'], ['_controller' => 'App\\Controller\\PageController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/pages']], [], []],
    'system_build' => [[], ['_controller' => 'App\\Controller\\SystemController::indexAction'], [], [['text', '/admin/system']], [], []],
];