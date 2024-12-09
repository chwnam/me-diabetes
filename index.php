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

const ME_DIABETES_MAIN    = __FILE__;
const ME_DIABETES_VERSION = '0.1.0';

if (!function_exists('meDiabetes')) {
    function meDiabetes(): \Bojaghi\Continy\Continy
    {
        static $instance = null;

        if (is_null($instance)) {
            try {
                $instance = \Bojaghi\Continy\ContinyFactory::create(__DIR__ . '/conf/continy.php');
            } catch (\Bojaghi\Continy\ContinyException|\Bojaghi\Continy\ContinyNotFoundException $e) {
                wp_die($e->getMessage());
            }
        }

        return $instance;
    }
}

if (!function_exists('meDiabetesGet')) {
    /**
     * @template T
     * @param class-string<T> $id
     *
     * @return T|object|null
     */
    function meDiabetesGet(string $id)
    {
        try {
            $instance = meDiabetes()->get($id);
        } catch (\Bojaghi\Continy\ContinyException|\Bojaghi\Continy\ContinyNotFoundException $e) {
            $instance = null;
        }

        return $instance;
    }
}

// Start our plugin.
meDiabetes();
