<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.access.role_hierarchy_voter' shared service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/Voter/VoterInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/Voter/RoleVoter.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/Voter/RoleHierarchyVoter.php';

return $this->privates['security.access.role_hierarchy_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\RoleHierarchyVoter(($this->privates['security.role_hierarchy'] ?? $this->getSecurity_RoleHierarchyService()));
