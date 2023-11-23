<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
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
                .'|/a(?'
                    .'|dmin/conversation/([^/]++)(*:38)'
                    .'|mbassadeur/([^/]++)(*:64)'
                .')'
                .'|/gestion/profil/([^/]++)(*:96)'
                .'|/document/([^/]++)(?'
                    .'|(*:124)'
                    .'|/edit(*:137)'
                    .'|(*:145)'
                .')'
                .'|/m(?'
                    .'|essage/(?'
                        .'|([^/]++)(*:177)'
                        .'|conversation/([^/]++)(*:206)'
                    .')'
                    .'|odification/([^/]++)(*:235)'
                .')'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:280)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => 'admin_conversation_show', '_controller' => 'App\\Controller\\AdminConversationController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        64 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['login'], null, null, false, true, null]],
        96 => [[['_route' => 'admin_profile_show', '_controller' => 'App\\Controller\\AdminProfileController::show'], ['login'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        124 => [[['_route' => 'document_show', '_controller' => 'App\\Controller\\DocumentController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        137 => [[['_route' => 'document_edit', '_controller' => 'App\\Controller\\DocumentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        145 => [[['_route' => 'document_delete', '_controller' => 'App\\Controller\\DocumentController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        177 => [[['_route' => 'message_delete', '_controller' => 'App\\Controller\\MessageController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        206 => [[['_route' => 'message_conversation_delete', '_controller' => 'App\\Controller\\MessageController::deleteConversation'], ['id'], ['DELETE' => 0], null, false, true, null]],
        235 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['login'], null, null, false, true, null]],
        280 => [
            [['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
