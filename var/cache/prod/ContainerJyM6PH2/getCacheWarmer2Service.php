<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Vich\UploaderBundle\Metadata\CacheWarmer' shared service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Metadata/CacheWarmer.php';

return $this->privates['Vich\\UploaderBundle\\Metadata\\CacheWarmer'] = new \Vich\UploaderBundle\Metadata\CacheWarmer(($this->targetDir.''.'/vich_uploader'), ($this->privates['vich_uploader.metadata_reader'] ?? $this->load('getVichUploader_MetadataReaderService.php')));