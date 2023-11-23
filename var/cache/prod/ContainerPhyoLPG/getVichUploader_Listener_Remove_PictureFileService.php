<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'vich_uploader.listener.remove.picture_file' shared service.

include_once \dirname(__DIR__, 4).'/vendor/doctrine/event-manager/src/EventSubscriber.php';
include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/EventListener/Doctrine/BaseListener.php';
include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/EventListener/Doctrine/RemoveListener.php';
include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Adapter/AdapterInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Adapter/ORM/DoctrineORMAdapter.php';

return $this->privates['vich_uploader.listener.remove.picture_file'] = new \Vich\UploaderBundle\EventListener\Doctrine\RemoveListener('picture_file', ($this->privates['vich_uploader.adapter.orm'] ?? ($this->privates['vich_uploader.adapter.orm'] = new \Vich\UploaderBundle\Adapter\ORM\DoctrineORMAdapter())), ($this->privates['vich_uploader.metadata_reader'] ?? $this->load('getVichUploader_MetadataReaderService.php')), ($this->services['vich_uploader.upload_handler'] ?? $this->load('getVichUploader_UploadHandlerService.php')));
