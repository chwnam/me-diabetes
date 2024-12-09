<?php
/**
 * Continy setup file.
 */

use Bojaghi\Continy\Continy;

if (!defined('ABSPATH')) {
    exit;
}

return [
    'main_file' => ME_DIABETES_MAIN,
    'version'   => ME_DIABETES_VERSION,
    //
    ///////////////////////////////////////////////////////////////////////////
    // Hooks definition
    'hooks'     => [
        'init' => 0,
    ],
    //
    ///////////////////////////////////////////////////////////////////////////
    // Objects binding
    'bindings'  => [
        'bojaghi/CPT'  => \Bojaghi\Cpt\CustomPosts::class,
        'bojaghi/Tax'  => \Bojaghi\Tax\CustomTaxonomies::class,
        'customFields' => \Changwoo\MeDiabetes\Modules\DiabetesFields::class
    ],
    //
    ///////////////////////////////////////////////////////////////////////////
    // Argument injection
    'arguments' => [
        'bojaghi/CPT'  => __DIR__ . '/cpt.php',
        'bojaghi/Tax'  => __DIR__ . '/tax.php',
        'customFields' => __DIR__ . '/fields.php',
    ],
    //
    ///////////////////////////////////////////////////////////////////////////
    // Modules setting
    'modules'   => [
        'init' => [
            Continy::PR_DEFAULT => [
                'bojaghi/CPT',
                'bojaghi/Tax',
                'customFields',
            ],
        ],
    ],
];
