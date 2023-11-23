<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\Repository\ResetPasswordRequestRepository' shared autowired service.

include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectRepository.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/src/Selectable.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
include_once \dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/Persistence/ResetPasswordRequestRepositoryInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/Persistence/Repository/ResetPasswordRequestRepositoryTrait.php';
include_once \dirname(__DIR__, 4).'/src/Repository/ResetPasswordRequestRepository.php';

return $this->privates['App\\Repository\\ResetPasswordRequestRepository'] = new \App\Repository\ResetPasswordRequestRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));