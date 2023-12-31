<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mailer.transport_factory.sendmail' shared service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/Transport/TransportFactoryInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/Transport/AbstractTransportFactory.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/Transport/SendmailTransportFactory.php';

return new \Symfony\Component\Mailer\Transport\SendmailTransportFactory(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), NULL, ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));
