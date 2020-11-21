<?php
/**
 * Tests for WooCommerce REST API PHP-Client.
 *
 * @category Tests
 * @package  Automattic/WooCommerce/Tests
 */

function includeIfExists($file)
{
    if (file_exists($file)) {
        return include $file;
    }
}

if ((!$loader = includeIfExists(__DIR__ . '/../vendor/autoload.php')) && (!$loader = includeIfExists(__DIR__ . '/../../../.composer/autoload.php'))) {
    die('You must set up the project dependencies, run the following commands:' . PHP_EOL . 'curl -s http://getcomposer.org/installer | php' . PHP_EOL . 'php composer.phar install' . PHP_EOL);
}

$loader->add('WooCommerce\Tests', __DIR__);

return $loader;
