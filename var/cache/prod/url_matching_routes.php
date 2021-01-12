<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/candidat' => [[['_route' => 'candidat', '_controller' => 'App\\Controller\\CandidatController::index'], null, null, null, false, false, null]],
        '/client' => [[['_route' => 'client', '_controller' => 'App\\Controller\\ClientController::client'], null, null, null, false, false, null]],
        '/customer' => [[['_route' => 'customer', '_controller' => 'App\\Controller\\CustomerController::customer'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/manager' => [[['_route' => 'manager', '_controller' => 'App\\Controller\\ManagerController::index'], null, null, null, false, false, null]],
        '/mission' => [[['_route' => 'mission', '_controller' => 'App\\Controller\\MissionController::index'], null, null, null, false, false, null]],
        '/profil' => [[['_route' => 'profil', '_controller' => 'App\\Controller\\ProfilController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/candidat/([^/]++)(?'
                    .'|/(?'
                        .'|profil(*:38)'
                        .'|delete(*:51)'
                    .')'
                    .'|(*:59)'
                .')'
                .'|/mission/([^/]++)(?'
                    .'|(*:87)'
                    .'|/(?'
                        .'|postuler(*:106)'
                        .'|delete(*:120)'
                        .'|edit(*:132)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => 'app_candidat_candidatprofil', '_controller' => 'App\\Controller\\CandidatController::candidatProfil'], ['id'], null, null, false, false, null]],
        51 => [[['_route' => 'app_candidat_deletecandidat', '_controller' => 'App\\Controller\\CandidatController::deleteCandidat'], ['id'], null, null, false, false, null]],
        59 => [[['_route' => 'app_candidat_candidats', '_controller' => 'App\\Controller\\CandidatController::candidats'], ['id'], null, null, false, true, null]],
        87 => [[['_route' => 'app_mission_getmission', '_controller' => 'App\\Controller\\MissionController::getMission'], ['id'], null, null, false, true, null]],
        106 => [[['_route' => 'app_mission_postulemission', '_controller' => 'App\\Controller\\MissionController::postuleMission'], ['id'], null, null, false, false, null]],
        120 => [[['_route' => 'app_mission_deletemission', '_controller' => 'App\\Controller\\MissionController::deleteMission'], ['id'], null, null, false, false, null]],
        132 => [
            [['_route' => 'app_mission_missionedit', '_controller' => 'App\\Controller\\MissionController::missionEdit'], ['id'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
