<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.access_listener' shared service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AbstractListener.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/ListenerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/LegacyListenerTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AccessListener.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/AccessMapInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/AccessMap.php';

return $this->privates['security.access_listener'] = new \Symfony\Component\Security\Http\Firewall\AccessListener(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.access.decision_manager'] ?? $this->getSecurity_Access_DecisionManagerService()), ($this->privates['security.access_map'] ?? ($this->privates['security.access_map'] = new \Symfony\Component\Security\Http\AccessMap())), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()));
