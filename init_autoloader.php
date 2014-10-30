<?php

if (file_exists('vendor/autoload.php')) {
    $loader = include 'vendor/autoload.php';
}

if (class_exists('Zend\Loader\AutoloaderFactory')) {
    return;
} else {
    throw new RuntimeException('Unable to load Zend Framework 2. Run `php composer.phar install`.');
}
