<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Vich\UploaderBundle\Util\Transliterator' shared service.

include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Util/Transliterator.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/string/Slugger/SluggerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/string/Slugger/AsciiSlugger.php';

return $this->privates['Vich\\UploaderBundle\\Util\\Transliterator'] = new \Vich\UploaderBundle\Util\Transliterator(new \Symfony\Component\String\Slugger\AsciiSlugger());
