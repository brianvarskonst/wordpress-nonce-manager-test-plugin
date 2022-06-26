<?php

/**
 * Plugin Name: WordPress Nonce Test Plugin
 * Plugin URI: https://github.com/brianvarskonst/wordpress-nonce-oop
 * Description: WordPress Nonce usage in a demo plugin
 * Version: 1.0.
 * Author: Brian Schäffner
 * Author URI: https://github.com/brianvarskonst
 * Requires at least: 6.0
 * Tested at: 6.0
 *
 * Text Domain: wp-nonce-test
 */

declare(strict_types=1);

if (!defined('ABSPATH')) {
    die();
}

$autoloader = __DIR__ . '/vendor/autoload.php';

// Check if composer install was executed
if (file_exists($autoloader) || is_readable($autoloader)) {
    require_once $autoloader;
}

// Create a new NonceTest instance and test the NonceManager
$nonceTest = new NonceTest();
$nonceTest->build();