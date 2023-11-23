<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'argument_resolver.service' shared service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolver/ServiceValueResolver.php';

return $this->privates['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'App\\Controller\\AdminConversationController::index' => ['privates', '.service_locator.4V7yqKg', 'get_ServiceLocator_4V7yqKgService.php', true],
    'App\\Controller\\AdminConversationController::show' => ['privates', '.service_locator.WdSZdo.', 'get_ServiceLocator_WdSZdo_Service.php', true],
    'App\\Controller\\AdminProfileController::index' => ['privates', '.service_locator.E2FlGqW', 'get_ServiceLocator_E2FlGqWService.php', true],
    'App\\Controller\\AdminProfileController::show' => ['privates', '.service_locator.3vYy5bm', 'get_ServiceLocator_3vYy5bmService.php', true],
    'App\\Controller\\DocumentController::delete' => ['privates', '.service_locator.hC9IBiM', 'get_ServiceLocator_HC9IBiMService.php', true],
    'App\\Controller\\DocumentController::edit' => ['privates', '.service_locator.hC9IBiM', 'get_ServiceLocator_HC9IBiMService.php', true],
    'App\\Controller\\DocumentController::index' => ['privates', '.service_locator.fQeCS3r', 'get_ServiceLocator_FQeCS3rService.php', true],
    'App\\Controller\\DocumentController::new' => ['privates', '.service_locator.WMorxTz', 'get_ServiceLocator_WMorxTzService.php', true],
    'App\\Controller\\DocumentController::show' => ['privates', '.service_locator.1Bvml7A', 'get_ServiceLocator_1Bvml7AService.php', true],
    'App\\Controller\\MessageController::delete' => ['privates', '.service_locator.uxumEEF', 'get_ServiceLocator_UxumEEFService.php', true],
    'App\\Controller\\MessageController::deleteConversation' => ['privates', '.service_locator.U28rs3b', 'get_ServiceLocator_U28rs3bService.php', true],
    'App\\Controller\\MessageController::index' => ['privates', '.service_locator.4V7yqKg', 'get_ServiceLocator_4V7yqKgService.php', true],
    'App\\Controller\\ResetPasswordController::request' => ['privates', '.service_locator.s8H_y58', 'get_ServiceLocator_S8HY58Service.php', true],
    'App\\Controller\\ResetPasswordController::reset' => ['privates', '.service_locator.F8Oy7LC', 'get_ServiceLocator_F8Oy7LCService.php', true],
    'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.f94kp8W', 'get_ServiceLocator_F94kp8WService.php', true],
    'App\\Controller\\SecurityController::register' => ['privates', '.service_locator.F8Oy7LC', 'get_ServiceLocator_F8Oy7LCService.php', true],
    'App\\Controller\\UserController::edit' => ['privates', '.service_locator.3vYy5bm', 'get_ServiceLocator_3vYy5bmService.php', true],
    'App\\Controller\\UserController::index' => ['privates', '.service_locator.E2FlGqW', 'get_ServiceLocator_E2FlGqWService.php', true],
    'App\\Controller\\UserController::show' => ['privates', '.service_locator.3vYy5bm', 'get_ServiceLocator_3vYy5bmService.php', true],
    'App\\Controller\\AdminConversationController:index' => ['privates', '.service_locator.4V7yqKg', 'get_ServiceLocator_4V7yqKgService.php', true],
    'App\\Controller\\AdminConversationController:show' => ['privates', '.service_locator.WdSZdo.', 'get_ServiceLocator_WdSZdo_Service.php', true],
    'App\\Controller\\AdminProfileController:index' => ['privates', '.service_locator.E2FlGqW', 'get_ServiceLocator_E2FlGqWService.php', true],
    'App\\Controller\\AdminProfileController:show' => ['privates', '.service_locator.3vYy5bm', 'get_ServiceLocator_3vYy5bmService.php', true],
    'App\\Controller\\DocumentController:delete' => ['privates', '.service_locator.hC9IBiM', 'get_ServiceLocator_HC9IBiMService.php', true],
    'App\\Controller\\DocumentController:edit' => ['privates', '.service_locator.hC9IBiM', 'get_ServiceLocator_HC9IBiMService.php', true],
    'App\\Controller\\DocumentController:index' => ['privates', '.service_locator.fQeCS3r', 'get_ServiceLocator_FQeCS3rService.php', true],
    'App\\Controller\\DocumentController:new' => ['privates', '.service_locator.WMorxTz', 'get_ServiceLocator_WMorxTzService.php', true],
    'App\\Controller\\DocumentController:show' => ['privates', '.service_locator.1Bvml7A', 'get_ServiceLocator_1Bvml7AService.php', true],
    'App\\Controller\\MessageController:delete' => ['privates', '.service_locator.uxumEEF', 'get_ServiceLocator_UxumEEFService.php', true],
    'App\\Controller\\MessageController:deleteConversation' => ['privates', '.service_locator.U28rs3b', 'get_ServiceLocator_U28rs3bService.php', true],
    'App\\Controller\\MessageController:index' => ['privates', '.service_locator.4V7yqKg', 'get_ServiceLocator_4V7yqKgService.php', true],
    'App\\Controller\\ResetPasswordController:request' => ['privates', '.service_locator.s8H_y58', 'get_ServiceLocator_S8HY58Service.php', true],
    'App\\Controller\\ResetPasswordController:reset' => ['privates', '.service_locator.F8Oy7LC', 'get_ServiceLocator_F8Oy7LCService.php', true],
    'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.f94kp8W', 'get_ServiceLocator_F94kp8WService.php', true],
    'App\\Controller\\SecurityController:register' => ['privates', '.service_locator.F8Oy7LC', 'get_ServiceLocator_F8Oy7LCService.php', true],
    'App\\Controller\\UserController:edit' => ['privates', '.service_locator.3vYy5bm', 'get_ServiceLocator_3vYy5bmService.php', true],
    'App\\Controller\\UserController:index' => ['privates', '.service_locator.E2FlGqW', 'get_ServiceLocator_E2FlGqWService.php', true],
    'App\\Controller\\UserController:show' => ['privates', '.service_locator.3vYy5bm', 'get_ServiceLocator_3vYy5bmService.php', true],
], [
    'App\\Controller\\AdminConversationController::index' => '?',
    'App\\Controller\\AdminConversationController::show' => '?',
    'App\\Controller\\AdminProfileController::index' => '?',
    'App\\Controller\\AdminProfileController::show' => '?',
    'App\\Controller\\DocumentController::delete' => '?',
    'App\\Controller\\DocumentController::edit' => '?',
    'App\\Controller\\DocumentController::index' => '?',
    'App\\Controller\\DocumentController::new' => '?',
    'App\\Controller\\DocumentController::show' => '?',
    'App\\Controller\\MessageController::delete' => '?',
    'App\\Controller\\MessageController::deleteConversation' => '?',
    'App\\Controller\\MessageController::index' => '?',
    'App\\Controller\\ResetPasswordController::request' => '?',
    'App\\Controller\\ResetPasswordController::reset' => '?',
    'App\\Controller\\SecurityController::login' => '?',
    'App\\Controller\\SecurityController::register' => '?',
    'App\\Controller\\UserController::edit' => '?',
    'App\\Controller\\UserController::index' => '?',
    'App\\Controller\\UserController::show' => '?',
    'App\\Controller\\AdminConversationController:index' => '?',
    'App\\Controller\\AdminConversationController:show' => '?',
    'App\\Controller\\AdminProfileController:index' => '?',
    'App\\Controller\\AdminProfileController:show' => '?',
    'App\\Controller\\DocumentController:delete' => '?',
    'App\\Controller\\DocumentController:edit' => '?',
    'App\\Controller\\DocumentController:index' => '?',
    'App\\Controller\\DocumentController:new' => '?',
    'App\\Controller\\DocumentController:show' => '?',
    'App\\Controller\\MessageController:delete' => '?',
    'App\\Controller\\MessageController:deleteConversation' => '?',
    'App\\Controller\\MessageController:index' => '?',
    'App\\Controller\\ResetPasswordController:request' => '?',
    'App\\Controller\\ResetPasswordController:reset' => '?',
    'App\\Controller\\SecurityController:login' => '?',
    'App\\Controller\\SecurityController:register' => '?',
    'App\\Controller\\UserController:edit' => '?',
    'App\\Controller\\UserController:index' => '?',
    'App\\Controller\\UserController:show' => '?',
]));
