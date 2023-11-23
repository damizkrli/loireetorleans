<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'translator' shared service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/translation-contracts/LocaleAwareInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/TranslatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/translation-contracts/TranslatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/TranslatorBagInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Translator.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Translation/Translator.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Formatter/MessageFormatterInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Formatter/IntlFormatterInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Formatter/ChoiceMessageFormatterInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Formatter/MessageFormatter.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/translation-contracts/TranslatorTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/IdentityTranslator.php';

$this->services['translator'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'translation.loader.csv' => ['privates', 'translation.loader.csv', 'getTranslation_Loader_CsvService.php', true],
    'translation.loader.dat' => ['privates', 'translation.loader.dat', 'getTranslation_Loader_DatService.php', true],
    'translation.loader.ini' => ['privates', 'translation.loader.ini', 'getTranslation_Loader_IniService.php', true],
    'translation.loader.json' => ['privates', 'translation.loader.json', 'getTranslation_Loader_JsonService.php', true],
    'translation.loader.mo' => ['privates', 'translation.loader.mo', 'getTranslation_Loader_MoService.php', true],
    'translation.loader.php' => ['privates', 'translation.loader.php', 'getTranslation_Loader_PhpService.php', true],
    'translation.loader.po' => ['privates', 'translation.loader.po', 'getTranslation_Loader_PoService.php', true],
    'translation.loader.qt' => ['privates', 'translation.loader.qt', 'getTranslation_Loader_QtService.php', true],
    'translation.loader.res' => ['privates', 'translation.loader.res', 'getTranslation_Loader_ResService.php', true],
    'translation.loader.xliff' => ['privates', 'translation.loader.xliff', 'getTranslation_Loader_XliffService.php', true],
    'translation.loader.yml' => ['privates', 'translation.loader.yml', 'getTranslation_Loader_YmlService.php', true],
], [
    'translation.loader.csv' => '?',
    'translation.loader.dat' => '?',
    'translation.loader.ini' => '?',
    'translation.loader.json' => '?',
    'translation.loader.mo' => '?',
    'translation.loader.php' => '?',
    'translation.loader.po' => '?',
    'translation.loader.qt' => '?',
    'translation.loader.res' => '?',
    'translation.loader.xliff' => '?',
    'translation.loader.yml' => '?',
]), new \Symfony\Component\Translation\Formatter\MessageFormatter(new \Symfony\Component\Translation\IdentityTranslator()), 'fr', ['translation.loader.php' => [0 => 'php'], 'translation.loader.yml' => [0 => 'yaml', 1 => 'yml'], 'translation.loader.xliff' => [0 => 'xlf', 1 => 'xliff'], 'translation.loader.po' => [0 => 'po'], 'translation.loader.mo' => [0 => 'mo'], 'translation.loader.qt' => [0 => 'ts'], 'translation.loader.csv' => [0 => 'csv'], 'translation.loader.res' => [0 => 'res'], 'translation.loader.dat' => [0 => 'dat'], 'translation.loader.ini' => [0 => 'ini'], 'translation.loader.json' => [0 => 'json']], ['cache_dir' => ($this->targetDir.''.'/translations'), 'debug' => false, 'resource_files' => ['af' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.af.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.af.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.af.xlf')], 'ar' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.ar.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.ar.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.ar.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/messages.ar.yaml'), 4 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/translations/KnpPaginatorBundle.ar.xliff'), 5 => (\dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/Resources/translations/ResetPasswordBundle.ar.xlf')], 'az' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.az.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.az.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.az.xlf')], 'be' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.be.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.be.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.be.xlf')], 'bg' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.bg.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.bg.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.bg.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/messages.bg.yaml'), 4 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/translations/KnpPaginatorBundle.bg.xliff')], 'bs' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.bs.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.bs.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.bs.xlf')], 'ca' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.ca.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.ca.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.ca.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/messages.ca.yaml'), 4 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/translations/KnpPaginatorBundle.ca.xliff'), 5 => (\dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/Resources/translations/ResetPasswordBundle.ca.xlf')], 'cs' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.cs.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.cs.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.cs.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/messages.cs.yaml'), 4 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/translations/KnpPaginatorBundle.cs.xliff'), 5 => (\dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/Resources/translations/ResetPasswordBundle.cs.xlf')], 'cy' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.cy.xlf')], 'da' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.da.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.da.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.da.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/translations/KnpPaginatorBundle.da.xliff')], 'de' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.de.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.de.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.de.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/messages.de.yaml'), 4 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/translations/KnpPaginatorBundle.de.xliff'), 5 => (\dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/Resources/translations/ResetPasswordBundle.de.xlf')], 'el' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.el.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.el.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.el.xlf')], 'en' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.en.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.en.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.en.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/messages.en.yaml'), 4 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/translations/KnpPaginatorBundle.en.xliff'), 5 => (\dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/Resources/translations/ResetPasswordBundle.en.xlf')], 'es' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.es.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.es.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.es.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/messages.es.yaml'), 4 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/translations/KnpPaginatorBundle.es.xliff'), 5 => (\dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/Resources/translations/ResetPasswordBundle.es.xlf')], 'et' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.et.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.et.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.et.xlf')], 'eu' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.eu.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.eu.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.eu.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/translations/KnpPaginatorBundle.eu.xliff')], 'fa' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.fa.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.fa.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.fa.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/translations/KnpPaginatorBundle.fa.xliff')], 'fi' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.fi.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.fi.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.fi.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/messages.fi.yaml'), 4 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/translations/KnpPaginatorBundle.fi.xliff'), 5 => (\dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/Resources/translations/ResetPasswordBundle.fi.xlf')], 'fr' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.fr.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.fr.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.fr.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/messages.fr.yaml'), 4 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/translations/KnpPaginatorBundle.fr.xliff'), 5 => (\dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/Resources/translations/ResetPasswordBundle.fr.xlf'), 6 => (\dirname(__DIR__, 4).'/translations/KnpPaginatorBundle.fr.yml')], 'gl' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.gl.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.gl.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.gl.xlf')], 'he' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.he.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.he.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.he.xlf')], 'hr' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.hr.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.hr.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.hr.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/translations/KnpPaginatorBundle.hr.xliff')], 'hu' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.hu.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.hu.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.hu.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/messages.hu.yaml'), 4 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/translations/KnpPaginatorBundle.hu.xliff'), 5 => (\dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/Resources/translations/ResetPasswordBundle.hu.xlf')], 'hy' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.hy.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.hy.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.hy.xlf')], 'id' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.id.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.id.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.id.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/translations/KnpPaginatorBundle.id.xliff')], 'it' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.it.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.it.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.it.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/messages.it.yaml'), 4 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/translations/KnpPaginatorBundle.it.xliff'), 5 => (\dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/Resources/translations/ResetPasswordBundle.it.xlf')], 'ja' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.ja.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.ja.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.ja.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/translations/KnpPaginatorBundle.ja.xliff'), 4 => (\dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/Resources/translations/ResetPasswordBundle.ja.xlf')], 'lb' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.lb.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.lb.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.lb.xlf')], 'lt' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.lt.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.lt.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.lt.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/messages.lt.yaml'), 4 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/translations/KnpPaginatorBundle.lt.xliff')], 'lv' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.lv.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.lv.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.lv.xlf')], 'mn' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.mn.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.mn.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.mn.xlf')], 'my' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.my.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.my.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.my.xlf')], 'nb' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.nb.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.nb.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.nb.xlf')], 'nl' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.nl.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.nl.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.nl.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/messages.nl.yaml'), 4 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/translations/KnpPaginatorBundle.nl.xliff'), 5 => (\dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/Resources/translations/ResetPasswordBundle+intl-icu.nl.xlf')], 'nn' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.nn.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.nn.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.nn.xlf')], 'no' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.no.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.no.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.no.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/translations/KnpPaginatorBundle.no.xliff')], 'pl' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.pl.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.pl.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.pl.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/messages.pl.yaml'), 4 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/translations/KnpPaginatorBundle.pl.xliff'), 5 => (\dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/Resources/translations/ResetPasswordBundle.pl.xlf')], 'pt' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.pt.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.pt.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.pt.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/messages.pt.yaml'), 4 => (\dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/Resources/translations/ResetPasswordBundle.pt.xlf')], 'pt_BR' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.pt_BR.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.pt_BR.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.pt_BR.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/translations/KnpPaginatorBundle.pt_BR.xliff')], 'ro' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.ro.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.ro.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.ro.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/translations/KnpPaginatorBundle.ro.xliff')], 'ru' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.ru.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.ru.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.ru.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/messages.ru.yaml'), 4 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/translations/KnpPaginatorBundle.ru.xliff'), 5 => (\dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/Resources/translations/ResetPasswordBundle.ru.xlf')], 'sk' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.sk.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.sk.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.sk.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/Resources/translations/ResetPasswordBundle.sk.xlf')], 'sl' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.sl.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.sl.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.sl.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/messages.sl.yaml')], 'sq' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.sq.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.sq.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.sq.xlf')], 'sr_Cyrl' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.sr_Cyrl.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.sr_Cyrl.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.sr_Cyrl.xlf')], 'sr_Latn' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.sr_Latn.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.sr_Latn.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.sr_Latn.xlf')], 'sv' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.sv.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.sv.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.sv.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/translations/KnpPaginatorBundle.sv.xliff')], 'th' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.th.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.th.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.th.xlf')], 'tl' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.tl.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.tl.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.tl.xlf')], 'tr' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.tr.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.tr.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.tr.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/messages.tr.yaml'), 4 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/translations/KnpPaginatorBundle.tr.xliff'), 5 => (\dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/Resources/translations/ResetPasswordBundle.tr.xlf')], 'uk' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.uk.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.uk.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.uk.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/messages.uk.yaml'), 4 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/translations/KnpPaginatorBundle.uk.xliff'), 5 => (\dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/Resources/translations/ResetPasswordBundle.uk.xlf')], 'ur' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.ur.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.ur.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.ur.xlf')], 'uz' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.uz.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.uz.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.uz.xlf')], 'vi' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.vi.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.vi.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.vi.xlf')], 'zh_CN' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.zh_CN.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.zh_CN.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.zh_CN.xlf')], 'zh_TW' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.zh_TW.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.zh_TW.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.zh_TW.xlf')], 'vn' => [0 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/messages.vn.yaml')], 'ky' => [0 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/translations/KnpPaginatorBundle.ky.xliff')], 'sw' => [0 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/translations/KnpPaginatorBundle.sw.xliff')], 'sr' => [0 => (\dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/Resources/translations/ResetPasswordBundle.sr.xlf')]], 'scanned_directories' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations'), 3 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations'), 4 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/translations'), 5 => (\dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/Resources/translations'), 6 => (\dirname(__DIR__, 4).'/translations'), 7 => (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/translations'), 8 => (\dirname(__DIR__, 4).'/src/Resources/FrameworkBundle/translations'), 9 => (\dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/translations'), 10 => (\dirname(__DIR__, 4).'/src/Resources/SensioFrameworkExtraBundle/translations'), 11 => (\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/translations'), 12 => (\dirname(__DIR__, 4).'/src/Resources/DoctrineBundle/translations'), 13 => (\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-migrations-bundle/translations'), 14 => (\dirname(__DIR__, 4).'/src/Resources/DoctrineMigrationsBundle/translations'), 15 => (\dirname(__DIR__, 4).'/vendor/symfony/security-bundle/translations'), 16 => (\dirname(__DIR__, 4).'/src/Resources/SecurityBundle/translations'), 17 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bundle/translations'), 18 => (\dirname(__DIR__, 4).'/src/Resources/TwigBundle/translations'), 19 => (\dirname(__DIR__, 4).'/vendor/symfony/monolog-bundle/translations'), 20 => (\dirname(__DIR__, 4).'/src/Resources/MonologBundle/translations'), 21 => (\dirname(__DIR__, 4).'/src/Resources/VichUploaderBundle/translations'), 22 => (\dirname(__DIR__, 4).'/src/Resources/KnpPaginatorBundle/translations'), 23 => (\dirname(__DIR__, 4).'/src/Resources/SymfonyCastsResetPasswordBundle/translations'), 24 => (\dirname(__DIR__, 4).'/vendor/twig/extra-bundle/translations'), 25 => (\dirname(__DIR__, 4).'/src/Resources/TwigExtraBundle/translations'), 26 => (\dirname(__DIR__, 4).'/vendor/symfony/webpack-encore-bundle/src/translations'), 27 => (\dirname(__DIR__, 4).'/src/Resources/WebpackEncoreBundle/translations'), 28 => (\dirname(__DIR__, 4).'/src/Resources/translations')], 'cache_vary' => ['scanned_directories' => [0 => 'vendor/symfony/validator/Resources/translations', 1 => 'vendor/symfony/form/Resources/translations', 2 => 'vendor/symfony/security-core/Resources/translations', 3 => 'vendor/vich/uploader-bundle/translations', 4 => 'vendor/knplabs/knp-paginator-bundle/translations', 5 => 'vendor/symfonycasts/reset-password-bundle/src/Resources/translations', 6 => 'translations', 7 => 'vendor/symfony/framework-bundle/translations', 8 => 'src/Resources/FrameworkBundle/translations', 9 => 'vendor/sensio/framework-extra-bundle/src/translations', 10 => 'src/Resources/SensioFrameworkExtraBundle/translations', 11 => 'vendor/doctrine/doctrine-bundle/translations', 12 => 'src/Resources/DoctrineBundle/translations', 13 => 'vendor/doctrine/doctrine-migrations-bundle/translations', 14 => 'src/Resources/DoctrineMigrationsBundle/translations', 15 => 'vendor/symfony/security-bundle/translations', 16 => 'src/Resources/SecurityBundle/translations', 17 => 'vendor/symfony/twig-bundle/translations', 18 => 'src/Resources/TwigBundle/translations', 19 => 'vendor/symfony/monolog-bundle/translations', 20 => 'src/Resources/MonologBundle/translations', 21 => 'src/Resources/VichUploaderBundle/translations', 22 => 'src/Resources/KnpPaginatorBundle/translations', 23 => 'src/Resources/SymfonyCastsResetPasswordBundle/translations', 24 => 'vendor/twig/extra-bundle/translations', 25 => 'src/Resources/TwigExtraBundle/translations', 26 => 'vendor/symfony/webpack-encore-bundle/src/translations', 27 => 'src/Resources/WebpackEncoreBundle/translations', 28 => 'src/Resources/translations']]]);

$instance->setConfigCacheFactory(($this->privates['config_cache_factory'] ?? ($this->privates['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory())));
$instance->setFallbackLocales([0 => 'fr']);

return $instance;