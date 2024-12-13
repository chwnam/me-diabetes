<?php
/**
 * Continy setup file.
 */

use Bojaghi\Continy\Continy;
use Changwoo\MeDiabetes\Modules;

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
        'bojaghi/CPT'   => \Bojaghi\Cpt\CustomPosts::class,
        'bojaghi/Seeds' => \Bojaghi\SeedObjects\SeedsObjects::class,
        'bojaghi/Tax'   => \Bojaghi\Tax\CustomTaxonomies::class,
        'customFields'  => Modules\DiabetesFields::class
    ],
    //
    ///////////////////////////////////////////////////////////////////////////
    // Argument injection
    'arguments' => [
        'bojaghi/CPT'   => __DIR__ . '/cpt.php',
        'bojaghi/Seeds' => function (Continy $continy) {
            return [
                'args' => [
                    'isPlugin' => true,
                    'mainFile' => $continy->getMain(),
                    'terms'    => __DIR__ . '/terms.php',
                ]
            ];
        },
        'bojaghi/Tax'   => __DIR__ . '/tax.php',
        'customFields'  => __DIR__ . '/fields.php',
    ],
    //
    ///////////////////////////////////////////////////////////////////////////
    // Modules setting
    'modules'   => [
        '_'    => [
            'bojaghi/Seeds',
        ],
        'init' => [
            Continy::PR_DEFAULT => [
                'bojaghi/CPT',
                'bojaghi/Tax',
                'customFields',
            ],
        ],
    ],
];
