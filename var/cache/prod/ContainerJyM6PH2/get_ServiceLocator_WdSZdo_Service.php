<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.WdSZdo.' shared service.

return $this->privates['.service_locator.WdSZdo.'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'conversation' => ['privates', '.errored..service_locator.WdSZdo..App\\Entity\\Conversation', NULL, 'Cannot autowire service ".service_locator.WdSZdo.": it references class "App\\Entity\\Conversation" but no such service exists.'],
    'user' => ['privates', '.errored..service_locator.WdSZdo..Symfony\\Component\\Security\\Core\\User\\UserInterface', NULL, 'Cannot autowire service ".service_locator.WdSZdo.": it references interface "Symfony\\Component\\Security\\Core\\User\\UserInterface" but no such service exists. Did you create a class that implements this interface?'],
    'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService.php', true],
], [
    'conversation' => 'App\\Entity\\Conversation',
    'user' => 'Symfony\\Component\\Security\\Core\\User\\UserInterface',
    'userRepository' => 'App\\Repository\\UserRepository',
]);