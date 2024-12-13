<?php
/**
 * Initial terms
 */

if (!defined('ABSPATH')) {
    exit;
}

// Register taxonomy before inserting initial terms.
meDiabetesGet('bojaghi/Tax');

return [
    //
    ///////////////////////////////////////////////////////////////////////////
    // TAX_RECORD
    // Define type of record.
    [
        'name'     => 'Glucose',
        'taxonomy' => TAX_RECORD,
        'slug'     => 'gluc',
    ],
    [
        'name'     => 'Injection',
        'taxonomy' => TAX_RECORD,
        'slug'     => 'injt',
    ],
    [
        'name'     => 'Meal',
        'taxonomy' => TAX_RECORD,
        'slug'     => 'meal',
    ],
    //
    ///////////////////////////////////////////////////////////////////////////
    // TAX_GLUCOSE_CP
    // Glucose checkpoint
    [
        'name'     => 'Breakfast: empty stomach',
        'taxonomy' => TAX_GLUCOSE_CP,
        'slug'     => 'b0',
    ],
    [
        'name'     => 'Breakfast: after 2 hours',
        'taxonomy' => TAX_GLUCOSE_CP,
        'slug'     => 'b2',
    ],
    [
        'name'     => 'Lunch: right before',
        'taxonomy' => TAX_GLUCOSE_CP,
        'slug'     => 'l0',
    ],
    [
        'name'     => 'Lunch: after 2 hours',
        'taxonomy' => TAX_GLUCOSE_CP,
        'slug'     => 'l2',
    ],
    [
        'name'     => 'Dinner: right before',
        'taxonomy' => TAX_GLUCOSE_CP,
        'slug'     => 'd0',
    ],
    [
        'name'     => 'Dinner: after 2 hours',
        'taxonomy' => TAX_GLUCOSE_CP,
        'slug'     => 'd2',
    ],
    //
    ///////////////////////////////////////////////////////////////////////////
    // TAX_INJECTION_CP
    // Injection checkpoint
    [
        'name'     => 'Morning',
        'taxonomy' => TAX_INJECTION_CP,
        'slug'     => 'morning',
    ],
    [
        'name'     => 'Afternoon',
        'taxonomy' => TAX_INJECTION_CP,
        'slug'     => 'afternoon',
    ],
    [
        'name'     => 'Evening',
        'taxonomy' => TAX_INJECTION_CP,
        'slug'     => 'evening',
    ],
    //
    ///////////////////////////////////////////////////////////////////////////
    // TAX_INJECTION_NAME
    // Injection name
    [
        'name'     => 'Tuojeo Solostar',
        'taxonomy' => TAX_INJECTION_NAME,
        'slug'     => 'toujeo-solostar',
    ],
    [
        'name'     => 'Novorapid',
        'taxonomy' => TAX_INJECTION_NAME,
        'slug'     => 'novorapid',
    ],
    //
    ///////////////////////////////////////////////////////////////////////////
    // TAX_MEAL_CP
    // Meal checkpoint
    [
        'name'     => 'Breakfast',
        'taxonomy' => TAX_MEAL_CP,
        'slug'     => 'breakfast',
    ],
    [
        'name'     => 'Lunch',
        'taxonomy' => TAX_MEAL_CP,
        'slug'     => 'lunch',
    ],
    [
        'name'     => 'Dinner',
        'taxonomy' => TAX_MEAL_CP,
        'slug'     => 'dinner',
    ],
];
