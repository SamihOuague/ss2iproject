<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'admin' => [[], ['_controller' => 'App\\Controller\\Admin\\DashboardController::index'], [], [['text', '/admin']], [], []],
    'candidat' => [[], ['_controller' => 'App\\Controller\\CandidatController::index'], [], [['text', '/candidat']], [], []],
    'app_candidat_candidatprofil' => [['id'], ['_controller' => 'App\\Controller\\CandidatController::candidatProfil'], [], [['text', '/profil'], ['variable', '/', '[^/]++', 'id', true], ['text', '/candidat']], [], []],
    'app_candidat_candidats' => [['id'], ['_controller' => 'App\\Controller\\CandidatController::candidats'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/candidat']], [], []],
    'app_candidat_deletecandidat' => [['id'], ['_controller' => 'App\\Controller\\CandidatController::deleteCandidat'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/candidat']], [], []],
    'client' => [[], ['_controller' => 'App\\Controller\\ClientController::client'], [], [['text', '/client']], [], []],
    'customer' => [[], ['_controller' => 'App\\Controller\\CustomerController::customer'], [], [['text', '/customer']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], []],
    'manager' => [[], ['_controller' => 'App\\Controller\\ManagerController::index'], [], [['text', '/manager']], [], []],
    'mission' => [[], ['_controller' => 'App\\Controller\\MissionController::index'], [], [['text', '/mission']], [], []],
    'app_mission_getmission' => [['id'], ['_controller' => 'App\\Controller\\MissionController::getMission'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/mission']], [], []],
    'app_mission_postulemission' => [['id'], ['_controller' => 'App\\Controller\\MissionController::postuleMission'], [], [['text', '/postuler'], ['variable', '/', '[^/]++', 'id', true], ['text', '/mission']], [], []],
    'app_mission_deletemission' => [['id'], ['_controller' => 'App\\Controller\\MissionController::deleteMission'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/mission']], [], []],
    'app_mission_missionedit' => [['id'], ['_controller' => 'App\\Controller\\MissionController::missionEdit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/mission']], [], []],
    'profil' => [[], ['_controller' => 'App\\Controller\\ProfilController::index'], [], [['text', '/profil']], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], []],
    'app_verify_email' => [[], ['_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], [], [['text', '/verify/email']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
];