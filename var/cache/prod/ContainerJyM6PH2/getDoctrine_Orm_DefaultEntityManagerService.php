<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'doctrine.orm.default_entity_manager' shared service.

include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/src/Configuration.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Configuration.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/Psr6/CacheAdapter.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/Cache.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/FlushableCache.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/ClearableCache.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiGetCache.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiDeleteCache.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiPutCache.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiOperationCache.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/CacheProvider.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/DoctrineProvider.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/Mapping/Driver/MappingDriver.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/Mapping/Driver/MappingDriverChain.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/CompatibilityAnnotationDriver.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/Mapping/Driver/ColocatedMappingDriver.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/ReflectionBasedDriver.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/AnnotationDriver.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/Mapping/Driver/FileDriver.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/XmlDriver.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/SimplifiedXmlDriver.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/NamingStrategy.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/UnderscoreNamingStrategy.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/QuoteStrategy.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Internal/SQLResultCasing.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/DefaultQuoteStrategy.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/EntityListenerResolver.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Mapping/EntityListenerServiceResolver.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Mapping/ContainerEntityListenerResolver.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Repository/RepositoryFactory.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ContainerRepositoryFactory.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/ManagerConfigurator.php';

$a = new \Doctrine\ORM\Configuration();

$b = \Doctrine\Common\Cache\Psr6\CacheAdapter::wrap(new \Symfony\Component\Cache\DoctrineProvider(($this->privates['doctrine.system_cache_pool'] ?? $this->load('getDoctrine_SystemCachePoolService.php'))));
$c = new \Doctrine\Persistence\Mapping\Driver\MappingDriverChain();

$d = new \Doctrine\ORM\Mapping\Driver\SimplifiedXmlDriver([(\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Resources/config/doctrine') => 'Vich\\UploaderBundle\\Entity']);
$d->setGlobalBasename('mapping');

$c->addDriver(new \Doctrine\ORM\Mapping\Driver\AnnotationDriver(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()), [0 => (\dirname(__DIR__, 4).'/src/Entity')]), 'App\\Entity');
$c->addDriver($d, 'Vich\\UploaderBundle\\Entity');

$a->setEntityNamespaces(['App' => 'App\\Entity', 'VichUploaderBundle' => 'Vich\\UploaderBundle\\Entity']);
$a->setMetadataCache($b);
$a->setQueryCache($b);
$a->setResultCache(\Doctrine\Common\Cache\Psr6\CacheAdapter::wrap(new \Symfony\Component\Cache\DoctrineProvider(($this->privates['doctrine.result_cache_pool'] ?? $this->load('getDoctrine_ResultCachePoolService.php')))));
$a->setMetadataDriverImpl($c);
$a->setProxyDir(($this->targetDir.''.'/doctrine/orm/Proxies'));
$a->setProxyNamespace('Proxies');
$a->setAutoGenerateProxyClasses(false);
$a->setSchemaIgnoreClasses([]);
$a->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
$a->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
$a->setNamingStrategy(new \Doctrine\ORM\Mapping\UnderscoreNamingStrategy());
$a->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
$a->setEntityListenerResolver(new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver($this));
$a->setRepositoryFactory(new \Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'App\\Repository\\ConversationRepository' => ['privates', 'App\\Repository\\ConversationRepository', 'getConversationRepositoryService.php', true],
    'App\\Repository\\DocumentRepository' => ['privates', 'App\\Repository\\DocumentRepository', 'getDocumentRepositoryService.php', true],
    'App\\Repository\\MessageRepository' => ['privates', 'App\\Repository\\MessageRepository', 'getMessageRepositoryService.php', true],
    'App\\Repository\\ResetPasswordRequestRepository' => ['privates', 'App\\Repository\\ResetPasswordRequestRepository', 'getResetPasswordRequestRepositoryService.php', true],
    'App\\Repository\\UserRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService.php', true],
], [
    'App\\Repository\\ConversationRepository' => '?',
    'App\\Repository\\DocumentRepository' => '?',
    'App\\Repository\\MessageRepository' => '?',
    'App\\Repository\\ResetPasswordRequestRepository' => '?',
    'App\\Repository\\UserRepository' => '?',
])));

$this->services['doctrine.orm.default_entity_manager'] = $instance = new \Doctrine\ORM\EntityManager(($this->services['doctrine.dbal.default_connection'] ?? $this->load('getDoctrine_Dbal_DefaultConnectionService.php')), $a);

(new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator([], []))->configure($instance);

return $instance;