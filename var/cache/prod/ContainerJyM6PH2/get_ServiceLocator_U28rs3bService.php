<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.U28rs3b' shared service.

return $this->privates['.service_locator.U28rs3b'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'conversation' => ['privates', '.errored..service_locator.U28rs3b.App\\Entity\\Conversation', NULL, 'Cannot autowire service ".service_locator.U28rs3b": it references class "App\\Entity\\Conversation" but no such service exists.'],
], [
    'conversation' => 'App\\Entity\\Conversation',
]);