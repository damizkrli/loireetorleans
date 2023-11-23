<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'SymfonyCasts\Bundle\ResetPassword\Command\ResetPasswordRemoveExpiredCommand' shared service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
include_once \dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/Command/ResetPasswordRemoveExpiredCommand.php';

$this->privates['SymfonyCasts\\Bundle\\ResetPassword\\Command\\ResetPasswordRemoveExpiredCommand'] = $instance = new \SymfonyCasts\Bundle\ResetPassword\Command\ResetPasswordRemoveExpiredCommand(($this->privates['symfonycasts.reset_password.cleaner'] ?? $this->load('getSymfonycasts_ResetPassword_CleanerService.php')));

$instance->setName('reset-password:remove-expired');

return $instance;
