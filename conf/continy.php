<?php
/**
 * Continy setup file.
 */

use Bojaghi\Continy\Continy;

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
    ],
    //
    ///////////////////////////////////////////////////////////////////////////
    // Modules setting
    'modules'   => [
        'init' => [
            Continy::PR_DEFAULT => [
            ],
        ],
    ],
    //
    ///////////////////////////////////////////////////////////////////////////
    // Argument injection
    'arguments' => [
    ],
];
