<?php
/**
 * Plugin Name:       Me Diabetes
 * Plugin URI:        https://github.com/chwnam/me-diabetes
 * Description:       A certain movement for improving your diabetes.
 * Author:            changwoo
 * Author URI:        https://blog.changwoo.pe.kr
 * Requires at least: 5.2
 * Requires PHP:      8.3
 * Version:           0.1.0
 */

if (!defined('ABSPATH')) {
    return;
}

require_once __DIR__ . '/vendor/autoload.php';

// Start our plugin.
meDiabetes();
