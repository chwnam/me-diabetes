<?php

define('ME_DIABETES_MAIN', dirname(__DIR__) . '/index.php');
const ME_DIABETES_VERSION = '0.1.0';

// Custom Post Types
const CPT_DIABETES = 'me_diab';

// Taxonomies
const TAX_RECORD         = 'me_diab_rcrd';      // What kind of record? BST, injection, or meal?
const TAX_GLUCOSE_CP     = 'me_diab_gluc_cp';   // glucose checkpoint
const TAX_INJECTION_CP   = 'me_diab_injt_cp';   // injection checkpoint
const TAX_INJECTION_NAME = 'me_diab_injt_name'; // injection name
const TAX_MEAL_CP        = 'me_diab_meal_cp';   // meal checkpoint
