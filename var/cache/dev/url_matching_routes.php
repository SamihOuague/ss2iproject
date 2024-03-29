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
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/candidat' => [[['_route' => 'candidat', '_controller' => 'App\\Controller\\CandidatController::index'], null, null, null, false, false, null]],
        '/client' => [[['_route' => 'client', '_controller' => 'App\\Controller\\ClientController::client'], null, null, null, false, false, null]],
        '/customer' => [[['_route' => 'customer', '_controller' => 'App\\Controller\\CustomerController::customer'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\HomeController::contact'], null, null, null, false, false, null]],
        '/a-propos' => [[['_route' => 'about', '_controller' => 'App\\Controller\\HomeController::about'], null, null, null, false, false, null]],
        '/nos-services' => [[['_route' => 'service', '_controller' => 'App\\Controller\\HomeController::service'], null, null, null, false, false, null]],
        '/privacy-policy' => [[['_route' => 'privacy', '_controller' => 'App\\Controller\\HomeController::privacy'], null, null, null, false, false, null]],
        '/manager' => [[['_route' => 'manager', '_controller' => 'App\\Controller\\ManagerController::index'], null, null, null, false, false, null]],
        '/mission' => [[['_route' => 'mission', '_controller' => 'App\\Controller\\MissionController::index'], null, null, null, false, false, null]],
        '/profil' => [[['_route' => 'profil', '_controller' => 'App\\Controller\\ProfilController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
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
                .'|/candidat/([^/]++)(?'
                    .'|/(?'
                        .'|profil(*:200)'
                        .'|delete(*:214)'
                    .')'
                    .'|(*:223)'
                .')'
                .'|/mission/([^/]++)(?'
                    .'|(*:252)'
                    .'|/(?'
                        .'|postuler(*:272)'
                        .'|delete(*:286)'
                        .'|edit(*:298)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        200 => [[['_route' => 'app_candidat_candidatprofil', '_controller' => 'App\\Controller\\CandidatController::candidatProfil'], ['id'], null, null, false, false, null]],
        214 => [[['_route' => 'app_candidat_deletecandidat', '_controller' => 'App\\Controller\\CandidatController::deleteCandidat'], ['id'], null, null, false, false, null]],
        223 => [[['_route' => 'app_candidat_candidats', '_controller' => 'App\\Controller\\CandidatController::candidats'], ['id'], null, null, false, true, null]],
        252 => [[['_route' => 'app_mission_getmission', '_controller' => 'App\\Controller\\MissionController::getMission'], ['id'], null, null, false, true, null]],
        272 => [[['_route' => 'app_mission_postulemission', '_controller' => 'App\\Controller\\MissionController::postuleMission'], ['id'], null, null, false, false, null]],
        286 => [[['_route' => 'app_mission_deletemission', '_controller' => 'App\\Controller\\MissionController::deleteMission'], ['id'], null, null, false, false, null]],
        298 => [
            [['_route' => 'app_mission_missionedit', '_controller' => 'App\\Controller\\MissionController::missionEdit'], ['id'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
