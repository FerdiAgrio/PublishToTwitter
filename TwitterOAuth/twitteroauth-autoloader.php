<?php

require_once __DIR__ . '/Symfony/Component/ClassLoader/UniversalClassLoader.php';

if (!defined('TWITTEROAUTH_FILE_PREFIX')) {
    define('TWITTEROAUTH_FILE_PREFIX', __DIR__);
}

$classLoader = new Symfony\Component\ClassLoader\UniversalClassLoader();
$classLoader->registerNamespaces(array(
    'Abraham'      => TWITTEROAUTH_FILE_PREFIX
));

$classLoader->register();

return $classLoader;
