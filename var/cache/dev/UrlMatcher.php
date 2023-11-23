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
        '/admin' => [[['_route' => 'admin_index', '_controller' => 'App\\Controller\\AdminController::home'], null, null, null, false, false, null]],
        '/admin/conversation' => [[['_route' => 'admin_conversation_index', '_controller' => 'App\\Controller\\AdminConversationController::index'], null, null, null, true, false, null]],
        '/gestion/profil' => [[['_route' => 'admin_profile_index', '_controller' => 'App\\Controller\\AdminProfileController::index'], null, null, null, true, false, null]],
        '/document' => [[['_route' => 'document_index', '_controller' => 'App\\Controller\\DocumentController::index'], null, ['GET' => 0], null, true, false, null]],
        '/document/ajout' => [[['_route' => 'document_new', '_controller' => 'App\\Controller\\DocumentController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/message' => [[['_route' => 'message_index', '_controller' => 'App\\Controller\\MessageController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/creation_de_compte' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\SecurityController::register'], null, null, null, false, false, null]],
        '/trombinoscope' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
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
                .'|/a(?'
                    .'|dmin/conversation/([^/]++)(*:200)'
                    .'|mbassadeur/([^/]++)(*:227)'
                .')'
                .'|/gestion/profil/([^/]++)(*:260)'
                .'|/document/([^/]++)(?'
                    .'|(*:289)'
                    .'|/edit(*:302)'
                    .'|(*:310)'
                .')'
                .'|/m(?'
                    .'|essage/(?'
                        .'|([^/]++)(*:342)'
                        .'|conversation/([^/]++)(*:371)'
                    .')'
                    .'|odification/([^/]++)(*:400)'
                .')'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:445)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        200 => [[['_route' => 'admin_conversation_show', '_controller' => 'App\\Controller\\AdminConversationController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        227 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['login'], null, null, false, true, null]],
        260 => [[['_route' => 'admin_profile_show', '_controller' => 'App\\Controller\\AdminProfileController::show'], ['login'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        289 => [[['_route' => 'document_show', '_controller' => 'App\\Controller\\DocumentController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        302 => [[['_route' => 'document_edit', '_controller' => 'App\\Controller\\DocumentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        310 => [[['_route' => 'document_delete', '_controller' => 'App\\Controller\\DocumentController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        342 => [[['_route' => 'message_delete', '_controller' => 'App\\Controller\\MessageController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        371 => [[['_route' => 'message_conversation_delete', '_controller' => 'App\\Controller\\MessageController::deleteConversation'], ['id'], ['DELETE' => 0], null, false, true, null]],
        400 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['login'], null, null, false, true, null]],
        445 => [
            [['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
