<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Controller\ResetPasswordController' shared autowired service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
include_once \dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/Controller/ResetPasswordControllerTrait.php';
include_once \dirname(__DIR__, 4).'/src/Controller/ResetPasswordController.php';
include_once \dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/ResetPasswordHelperInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/ResetPasswordHelper.php';
include_once \dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/Generator/ResetPasswordTokenGenerator.php';
include_once \dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/Generator/ResetPasswordRandomGenerator.php';

$this->services['App\\Controller\\ResetPasswordController'] = $instance = new \App\Controller\ResetPasswordController(new \SymfonyCasts\Bundle\ResetPassword\ResetPasswordHelper(new \SymfonyCasts\Bundle\ResetPassword\Generator\ResetPasswordTokenGenerator($this->getEnv('APP_SECRET'), new \SymfonyCasts\Bundle\ResetPassword\Generator\ResetPasswordRandomGenerator()), ($this->privates['symfonycasts.reset_password.cleaner'] ?? $this->load('getSymfonycasts_ResetPassword_CleanerService.php')), ($this->privates['App\\Repository\\ResetPasswordRequestRepository'] ?? $this->load('getResetPasswordRequestRepositoryService.php')), 3600, 3600));

$instance->setContainer(($this->privates['.service_locator.AVaUqzz'] ?? $this->load('get_ServiceLocator_AVaUqzzService.php'))->withContext('App\\Controller\\ResetPasswordController', $this));

return $instance;
