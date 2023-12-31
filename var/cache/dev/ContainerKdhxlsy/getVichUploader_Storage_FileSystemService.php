<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'vich_uploader.storage.file_system' shared service.

include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Storage/StorageInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Storage/AbstractStorage.php';
include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Storage/FileSystemStorage.php';

return $this->privates['vich_uploader.storage.file_system'] = new \Vich\UploaderBundle\Storage\FileSystemStorage(($this->privates['vich_uploader.property_mapping_factory'] ?? $this->load('getVichUploader_PropertyMappingFactoryService.php')));
