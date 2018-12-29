<?php
/**
 * Plugin Name: Fortress Security Suite
 * Plugin URI:  https://displace.tech
 * Description: Security extensions and configuration for WordPress.
 * Version:     1.0.0
 * Author:      Eric Mann
 * Author URI:  https://eamann.com
 * License:     MIT
 *
 * @package Fortress
 */

$fortress_autoload = __DIR__ . '/vendor/autoload.php';
if (file_exists($fortress_autoload)) {
    require_once $fortress_autoload;
}
