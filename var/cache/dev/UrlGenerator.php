<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '\\d+', 'code'], ['text', '/_error']], [], []],
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
    'admin_index' => [[], ['_controller' => 'App\\Controller\\AdminController::home'], [], [['text', '/admin']], [], []],
    'admin_conversation_index' => [[], ['_controller' => 'App\\Controller\\AdminConversationController::index'], [], [['text', '/admin/conversation/']], [], []],
    'admin_conversation_show' => [['id'], ['_controller' => 'App\\Controller\\AdminConversationController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/conversation']], [], []],
    'admin_profile_index' => [[], ['_controller' => 'App\\Controller\\AdminProfileController::index'], [], [['text', '/gestion/profil/']], [], []],
    'admin_profile_show' => [['login'], ['_controller' => 'App\\Controller\\AdminProfileController::show'], [], [['variable', '/', '[^/]++', 'login'], ['text', '/gestion/profil']], [], []],
    'document_index' => [[], ['_controller' => 'App\\Controller\\DocumentController::index'], [], [['text', '/document/']], [], []],
    'document_new' => [[], ['_controller' => 'App\\Controller\\DocumentController::new'], [], [['text', '/document/ajout']], [], []],
    'document_show' => [['id'], ['_controller' => 'App\\Controller\\DocumentController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/document']], [], []],
    'document_edit' => [['id'], ['_controller' => 'App\\Controller\\DocumentController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/document']], [], []],
    'document_delete' => [['id'], ['_controller' => 'App\\Controller\\DocumentController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/document']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], []],
    'message_index' => [[], ['_controller' => 'App\\Controller\\MessageController::index'], [], [['text', '/message/']], [], []],
    'message_delete' => [['id'], ['_controller' => 'App\\Controller\\MessageController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/message']], [], []],
    'message_conversation_delete' => [['id'], ['_controller' => 'App\\Controller\\MessageController::deleteConversation'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/message/conversation']], [], []],
    'app_forgot_password_request' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::request'], [], [['text', '/reset-password']], [], []],
    'app_check_email' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], [], [['text', '/reset-password/check-email']], [], []],
    'app_reset_password' => [['token'], ['token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/reset-password/reset']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/connexion']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/deconnexion']], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\SecurityController::register'], [], [['text', '/creation_de_compte']], [], []],
    'user_index' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/trombinoscope']], [], []],
    'user_show' => [['login'], ['_controller' => 'App\\Controller\\UserController::show'], [], [['variable', '/', '[^/]++', 'login'], ['text', '/ambassadeur']], [], []],
    'user_edit' => [['login'], ['_controller' => 'App\\Controller\\UserController::edit'], [], [['variable', '/', '[^/]++', 'login'], ['text', '/modification']], [], []],
];
