<?php
/**
 * Custom field configuration
 */

use Changwoo\MeDiabetes\Modules\DiabetesFields;

if (!defined('ABSPATH')) {
    exit;
}

return [
    'post' => DiabetesFields::getConfig(),
];
