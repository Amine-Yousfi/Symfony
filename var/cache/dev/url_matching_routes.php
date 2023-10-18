<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/author' => [[['_route' => 'app_author', '_controller' => 'App\\Controller\\AuthorController::index'], null, null, null, false, false, null]],
        '/showlist' => [[['_route' => 'app_showlist', '_controller' => 'App\\Controller\\AuthorController::list'], null, null, null, false, false, null]],
        '/Affiche' => [[['_route' => 'app_Affiche', '_controller' => 'App\\Controller\\AuthorController::Affiche'], null, null, null, false, false, null]],
        '/Add' => [[['_route' => 'app_Add', '_controller' => 'App\\Controller\\AuthorController::Add'], null, null, null, false, false, null]],
        '/AddStatistique' => [[['_route' => 'app_AddStatistique', '_controller' => 'App\\Controller\\AuthorController::addStatistique'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/affiche' => [[['_route' => 'app_affiche', '_controller' => 'App\\Controller\\HomeController::Affiche'], null, null, null, false, false, null]],
        '/service' => [[['_route' => 'app_service', '_controller' => 'App\\Controller\\ServiceController::index'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/show(?'
                    .'|Author/([^/]++)(*:30)'
                    .'|Service/([^/]++)(*:53)'
                .')'
                .'|/auhtorDetails/([^/]++)(*:84)'
                .'|/edit/([^/]++)(*:105)'
                .'|/delete/([^/]++)(*:129)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:168)'
                    .'|wdt/([^/]++)(*:188)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:234)'
                            .'|router(*:248)'
                            .'|exception(?'
                                .'|(*:268)'
                                .'|\\.css(*:281)'
                            .')'
                        .')'
                        .'|(*:291)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        30 => [[['_route' => 'app_showAuthor', '_controller' => 'App\\Controller\\AuthorController::showAuthor'], ['name'], null, null, false, true, null]],
        53 => [[['_route' => 'app_showService', '_controller' => 'App\\Controller\\ServiceController::showService'], ['name'], null, null, false, true, null]],
        84 => [[['_route' => 'app_authorDetails', '_controller' => 'App\\Controller\\AuthorController::auhtorDetails»'], ['id'], null, null, false, true, null]],
        105 => [[['_route' => 'app_edit', '_controller' => 'App\\Controller\\AuthorController::edit'], ['id'], null, null, false, true, null]],
        129 => [[['_route' => 'app_delete', '_controller' => 'App\\Controller\\AuthorController::delete'], ['id'], null, null, false, true, null]],
        168 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        188 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        234 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        248 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        268 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        281 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        291 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
