<?php
/**
 * Custom Taxonomy (Tax) configuration
 */

if (!defined('ABSPATH')) {
    exit;
}

return [
    //
    ///////////////////////////////////////////////////////////////////////////
    // TAX: me_diab_rcrd
    [
        // Taxonomy name. Maximum 32 characters.
        TAX_RECORD,

        // Object types. Required.
        [CPT_DIABETES],

        // Arguments.
        [
            'labels'             => [
                'name'          => _x('Record Types', 'me_diab_rcrd label', 'me-diabetes'),
                'singular_name' => _x('Record Type', 'me_diab_rcrd label', 'me-diabetes'),
                // 'search_items'               => _x('', 'me_diab_rcrd label', 'me-diabetes'),
                // 'popular_items'              => _x('', 'me_diab_rcrd label', 'me-diabetes'),
                // 'all_items'                  => _x('', 'me_diab_rcrd label', 'me-diabetes'),
                // 'parent_item'                => _x('', 'me_diab_rcrd label', 'me-diabetes'),
                // 'parent_item_colon'          => _x('', 'me_diab_rcrd label', 'me-diabetes'),
                // 'name_field_description'     => _x('', 'me_diab_rcrd label', 'me-diabetes'),
                // 'slug_field_description'     => _x('', 'me_diab_rcrd label', 'me-diabetes'),
                // 'parent_field_description'   => _x('', 'me_diab_rcrd label', 'me-diabetes'),
                // 'desc_field_description'     => _x('', 'me_diab_rcrd label', 'me-diabetes'),
                // 'edit_item'                  => _x('', 'me_diab_rcrd label', 'me-diabetes'),
                // 'view_item'                  => _x('', 'me_diab_rcrd label', 'me-diabetes'),
                // 'update_item'                => _x('', 'me_diab_rcrd label', 'me-diabetes'),
                // 'add_new_item'               => _x('', 'me_diab_rcrd label', 'me-diabetes'),
                // 'new_item_name'              => _x('', 'me_diab_rcrd label', 'me-diabetes'),
                // 'template_name'              => _x('', 'me_diab_rcrd label', 'me-diabetes'),
                // 'separate_items_with_commas' => _x('', 'me_diab_rcrd label', 'me-diabetes'),
                // 'add_or_remove_items'        => _x('', 'me_diab_rcrd label', 'me-diabetes'),
                // 'choose_from_most_used'      => _x('', 'me_diab_rcrd label', 'me-diabetes'),
                // 'not_found'                  => _x('', 'me_diab_rcrd label', 'me-diabetes'),
                // 'no_terms'                   => _x('', 'me_diab_rcrd label', 'me-diabetes'),
                // 'filter_by_item'             => _x('', 'me_diab_rcrd label', 'me-diabetes'),
                // 'items_list_navigation'      => _x('', 'me_diab_rcrd label', 'me-diabetes'),
                // 'items_list'                 => _x('', 'me_diab_rcrd label', 'me-diabetes'),
                // 'most_used'                  => _x('', 'me_diab_rcrd label', 'me-diabetes'),
                // 'back_to_items'              => _x('', 'me_diab_rcrd label', 'me-diabetes'),
                // 'item_link'                  => _x('', 'me_diab_rcrd label', 'me-diabetes'),
                // 'item_link_description'      => _x('', 'me_diab_rcrd label', 'me-diabetes'),
            ],
            'description'        => '',
            'public'             => false,
            'publicly_queryable' => false,
            'hierarchical'       => false,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'show_in_nav_menus'  => false,
            'show_in_rest'       => false,
            'show_tagcloud'      => false,
            'show_in_quick_edit' => true,
            'show_admin_column'  => true,
            'rewrite'            => [
                'slug'         => 'me-diabetes-record',
                'with_front'   => true,
                'hierarchical' => false,
                'ep_mask'      => EP_NONE,
            ],
            'query_var'          => false,
        ],
    ],
    //
    ///////////////////////////////////////////////////////////////////////////
    // TAX: me_diab_gluc_cp
    [
        // Taxonomy name. Maximum 32 characters.
        TAX_GLUCOSE_CP,

        // Object types. Required.
        [CPT_DIABETES],

        // Arguments.
        [
            'labels'             => [
                'name'          => _x('Glucose CPs', 'me_diab_gluc_cp label', 'me-diabetes'),
                'singular_name' => _x('Glucose CP', 'me_diab_gluc_cp label', 'me-diabetes'),
                // 'search_items'               => _x('', 'me_diab_gluc_cp label', 'me-diabetes'),
                // 'popular_items'              => _x('', 'me_diab_gluc_cp label', 'me-diabetes'),
                // 'all_items'                  => _x('', 'me_diab_gluc_cp label', 'me-diabetes'),
                // 'parent_item'                => _x('', 'me_diab_gluc_cp label', 'me-diabetes'),
                // 'parent_item_colon'          => _x('', 'me_diab_gluc_cp label', 'me-diabetes'),
                // 'name_field_description'     => _x('', 'me_diab_gluc_cp label', 'me-diabetes'),
                // 'slug_field_description'     => _x('', 'me_diab_gluc_cp label', 'me-diabetes'),
                // 'parent_field_description'   => _x('', 'me_diab_gluc_cp label', 'me-diabetes'),
                // 'desc_field_description'     => _x('', 'me_diab_gluc_cp label', 'me-diabetes'),
                // 'edit_item'                  => _x('', 'me_diab_gluc_cp label', 'me-diabetes'),
                // 'view_item'                  => _x('', 'me_diab_gluc_cp label', 'me-diabetes'),
                // 'update_item'                => _x('', 'me_diab_gluc_cp label', 'me-diabetes'),
                // 'add_new_item'               => _x('', 'me_diab_gluc_cp label', 'me-diabetes'),
                // 'new_item_name'              => _x('', 'me_diab_gluc_cp label', 'me-diabetes'),
                // 'template_name'              => _x('', 'me_diab_gluc_cp label', 'me-diabetes'),
                // 'separate_items_with_commas' => _x('', 'me_diab_gluc_cp label', 'me-diabetes'),
                // 'add_or_remove_items'        => _x('', 'me_diab_gluc_cp label', 'me-diabetes'),
                // 'choose_from_most_used'      => _x('', 'me_diab_gluc_cp label', 'me-diabetes'),
                // 'not_found'                  => _x('', 'me_diab_gluc_cp label', 'me-diabetes'),
                // 'no_terms'                   => _x('', 'me_diab_gluc_cp label', 'me-diabetes'),
                // 'filter_by_item'             => _x('', 'me_diab_gluc_cp label', 'me-diabetes'),
                // 'items_list_navigation'      => _x('', 'me_diab_gluc_cp label', 'me-diabetes'),
                // 'items_list'                 => _x('', 'me_diab_gluc_cp label', 'me-diabetes'),
                // 'most_used'                  => _x('', 'me_diab_gluc_cp label', 'me-diabetes'),
                // 'back_to_items'              => _x('', 'me_diab_gluc_cp label', 'me-diabetes'),
                // 'item_link'                  => _x('', 'me_diab_gluc_cp label', 'me-diabetes'),
                // 'item_link_description'      => _x('', 'me_diab_gluc_cp label', 'me-diabetes'),
            ],
            'description'        => '',
            'public'             => false,
            'publicly_queryable' => false,
            'hierarchical'       => false,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'show_in_nav_menus'  => false,
            'show_in_rest'       => false,
            'show_tagcloud'      => false,
            'show_in_quick_edit' => true,
            'show_admin_column'  => true,
            'rewrite'            => [
                'slug'         => 'me-diabetes-glucose-checkpoint',
                'with_front'   => true,
                'hierarchical' => false,
                'ep_mask'      => EP_NONE,
            ],
            'query_var'          => false,
        ],
    ],
    //
    ///////////////////////////////////////////////////////////////////////////
    // TAX: me_diab_injt_cp
    [
        // Taxonomy name. Maximum 32 characters.
        TAX_INJECTION_CP,

        // Object types. Required.
        [CPT_DIABETES],

        // Arguments.
        [
            'labels'             => [
                'name'          => _x('Injection CPs', 'me_diab_injt_cp label', 'me-diabetes'),
                'singular_name' => _x('Injection CP', 'me_diab_injt_cp label', 'me-diabetes'),
                // 'search_items'               => _x('', 'me_diab_injt_cp label', 'me-diabetes'),
                // 'popular_items'              => _x('', 'me_diab_injt_cp label', 'me-diabetes'),
                // 'all_items'                  => _x('', 'me_diab_injt_cp label', 'me-diabetes'),
                // 'parent_item'                => _x('', 'me_diab_injt_cp label', 'me-diabetes'),
                // 'parent_item_colon'          => _x('', 'me_diab_injt_cp label', 'me-diabetes'),
                // 'name_field_description'     => _x('', 'me_diab_injt_cp label', 'me-diabetes'),
                // 'slug_field_description'     => _x('', 'me_diab_injt_cp label', 'me-diabetes'),
                // 'parent_field_description'   => _x('', 'me_diab_injt_cp label', 'me-diabetes'),
                // 'desc_field_description'     => _x('', 'me_diab_injt_cp label', 'me-diabetes'),
                // 'edit_item'                  => _x('', 'me_diab_injt_cp label', 'me-diabetes'),
                // 'view_item'                  => _x('', 'me_diab_injt_cp label', 'me-diabetes'),
                // 'update_item'                => _x('', 'me_diab_injt_cp label', 'me-diabetes'),
                // 'add_new_item'               => _x('', 'me_diab_injt_cp label', 'me-diabetes'),
                // 'new_item_name'              => _x('', 'me_diab_injt_cp label', 'me-diabetes'),
                // 'template_name'              => _x('', 'me_diab_injt_cp label', 'me-diabetes'),
                // 'separate_items_with_commas' => _x('', 'me_diab_injt_cp label', 'me-diabetes'),
                // 'add_or_remove_items'        => _x('', 'me_diab_injt_cp label', 'me-diabetes'),
                // 'choose_from_most_used'      => _x('', 'me_diab_injt_cp label', 'me-diabetes'),
                // 'not_found'                  => _x('', 'me_diab_injt_cp label', 'me-diabetes'),
                // 'no_terms'                   => _x('', 'me_diab_injt_cp label', 'me-diabetes'),
                // 'filter_by_item'             => _x('', 'me_diab_injt_cp label', 'me-diabetes'),
                // 'items_list_navigation'      => _x('', 'me_diab_injt_cp label', 'me-diabetes'),
                // 'items_list'                 => _x('', 'me_diab_injt_cp label', 'me-diabetes'),
                // 'most_used'                  => _x('', 'me_diab_injt_cp label', 'me-diabetes'),
                // 'back_to_items'              => _x('', 'me_diab_injt_cp label', 'me-diabetes'),
                // 'item_link'                  => _x('', 'me_diab_injt_cp label', 'me-diabetes'),
                // 'item_link_description'      => _x('', 'me_diab_injt_cp label', 'me-diabetes'),
            ],
            'description'        => '',
            'public'             => false,
            'publicly_queryable' => false,
            'hierarchical'       => false,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'show_in_nav_menus'  => false,
            'show_in_rest'       => false,
            'show_tagcloud'      => false,
            'show_in_quick_edit' => true,
            'show_admin_column'  => true,
            'rewrite'            => [
                'slug'         => 'me-diabetes-injection-checkpoint',
                'with_front'   => true,
                'hierarchical' => false,
                'ep_mask'      => EP_NONE,
            ],
            'query_var'          => false,
        ],
    ],
    //
    ///////////////////////////////////////////////////////////////////////////
    // TAX: me_diabetes_injection_name
    [
        // Taxonomy name. Maximum 32 characters.
        TAX_INJECTION_NAME,

        // Object types. Required.
        [CPT_DIABETES],

        // Arguments.
        [
            'labels'             => [
                'name'          => _x('Injection Subjects', 'me_diab_injt_name label', 'me-diabetes'),
                'singular_name' => _x('Injection Subject', 'me_diab_injt_name label', 'me-diabetes'),
                // 'search_items'               => _x('', 'me_diab_injt_name label', 'me-diabetes'),
                // 'popular_items'              => _x('', 'me_diab_injt_name label', 'me-diabetes'),
                // 'all_items'                  => _x('', 'me_diab_injt_name label', 'me-diabetes'),
                // 'parent_item'                => _x('', 'me_diab_injt_name label', 'me-diabetes'),
                // 'parent_item_colon'          => _x('', 'me_diab_injt_name label', 'me-diabetes'),
                // 'name_field_description'     => _x('', 'me_diab_injt_name label', 'me-diabetes'),
                // 'slug_field_description'     => _x('', 'me_diab_injt_name label', 'me-diabetes'),
                // 'parent_field_description'   => _x('', 'me_diab_injt_name label', 'me-diabetes'),
                // 'desc_field_description'     => _x('', 'me_diab_injt_name label', 'me-diabetes'),
                // 'edit_item'                  => _x('', 'me_diab_injt_name label', 'me-diabetes'),
                // 'view_item'                  => _x('', 'me_diab_injt_name label', 'me-diabetes'),
                // 'update_item'                => _x('', 'me_diab_injt_name label', 'me-diabetes'),
                // 'add_new_item'               => _x('', 'me_diab_injt_name label', 'me-diabetes'),
                // 'new_item_name'              => _x('', 'me_diab_injt_name label', 'me-diabetes'),
                // 'template_name'              => _x('', 'me_diab_injt_name label', 'me-diabetes'),
                // 'separate_items_with_commas' => _x('', 'me_diab_injt_name label', 'me-diabetes'),
                // 'add_or_remove_items'        => _x('', 'me_diab_injt_name label', 'me-diabetes'),
                // 'choose_from_most_used'      => _x('', 'me_diab_injt_name label', 'me-diabetes'),
                // 'not_found'                  => _x('', 'me_diab_injt_name label', 'me-diabetes'),
                // 'no_terms'                   => _x('', 'me_diab_injt_name label', 'me-diabetes'),
                // 'filter_by_item'             => _x('', 'me_diab_injt_name label', 'me-diabetes'),
                // 'items_list_navigation'      => _x('', 'me_diab_injt_name label', 'me-diabetes'),
                // 'items_list'                 => _x('', 'me_diab_injt_name label', 'me-diabetes'),
                // 'most_used'                  => _x('', 'me_diab_injt_name label', 'me-diabetes'),
                // 'back_to_items'              => _x('', 'me_diab_injt_name label', 'me-diabetes'),
                // 'item_link'                  => _x('', 'me_diab_injt_name label', 'me-diabetes'),
                // 'item_link_description'      => _x('', 'me_diab_injt_name label', 'me-diabetes'),
            ],
            'description'        => '',
            'public'             => false,
            'publicly_queryable' => false,
            'hierarchical'       => false,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'show_in_nav_menus'  => false,
            'show_in_rest'       => false,
            'show_tagcloud'      => false,
            'show_in_quick_edit' => true,
            'show_admin_column'  => true,
            'rewrite'            => [
                'slug'         => 'me-diabetes-injection-checkpoint',
                'with_front'   => true,
                'hierarchical' => false,
                'ep_mask'      => EP_NONE,
            ],
            'query_var'          => false,
        ],
    ],
    //
    ///////////////////////////////////////////////////////////////////////////
    // TAX: me_diab_meal_cp
    [
        // Taxonomy name. Maximum 32 characters.
        TAX_MEAL_CP,

        // Object types. Required.
        [CPT_DIABETES],

        // Arguments.
        [
            'labels'             => [
                'name'          => _x('Meal CPs', 'me_diab_meal_cp label', 'me-diabetes'),
                'singular_name' => _x('Meal CP', 'me_diab_meal_cp label', 'me-diabetes'),
                // 'search_items'               => _x('', 'me_diab_meal_cp label', 'me-diabetes'),
                // 'popular_items'              => _x('', 'me_diab_meal_cp label', 'me-diabetes'),
                // 'all_items'                  => _x('', 'me_diab_meal_cp label', 'me-diabetes'),
                // 'parent_item'                => _x('', 'me_diab_meal_cp label', 'me-diabetes'),
                // 'parent_item_colon'          => _x('', 'me_diab_meal_cp label', 'me-diabetes'),
                // 'name_field_description'     => _x('', 'me_diab_meal_cp label', 'me-diabetes'),
                // 'slug_field_description'     => _x('', 'me_diab_meal_cp label', 'me-diabetes'),
                // 'parent_field_description'   => _x('', 'me_diab_meal_cp label', 'me-diabetes'),
                // 'desc_field_description'     => _x('', 'me_diab_meal_cp label', 'me-diabetes'),
                // 'edit_item'                  => _x('', 'me_diab_meal_cp label', 'me-diabetes'),
                // 'view_item'                  => _x('', 'me_diab_meal_cp label', 'me-diabetes'),
                // 'update_item'                => _x('', 'me_diab_meal_cp label', 'me-diabetes'),
                // 'add_new_item'               => _x('', 'me_diab_meal_cp label', 'me-diabetes'),
                // 'new_item_name'              => _x('', 'me_diab_meal_cp label', 'me-diabetes'),
                // 'template_name'              => _x('', 'me_diab_meal_cp label', 'me-diabetes'),
                // 'separate_items_with_commas' => _x('', 'me_diab_meal_cp label', 'me-diabetes'),
                // 'add_or_remove_items'        => _x('', 'me_diab_meal_cp label', 'me-diabetes'),
                // 'choose_from_most_used'      => _x('', 'me_diab_meal_cp label', 'me-diabetes'),
                // 'not_found'                  => _x('', 'me_diab_meal_cp label', 'me-diabetes'),
                // 'no_terms'                   => _x('', 'me_diab_meal_cp label', 'me-diabetes'),
                // 'filter_by_item'             => _x('', 'me_diab_meal_cp label', 'me-diabetes'),
                // 'items_list_navigation'      => _x('', 'me_diab_meal_cp label', 'me-diabetes'),
                // 'items_list'                 => _x('', 'me_diab_meal_cp label', 'me-diabetes'),
                // 'most_used'                  => _x('', 'me_diab_meal_cp label', 'me-diabetes'),
                // 'back_to_items'              => _x('', 'me_diab_meal_cp label', 'me-diabetes'),
                // 'item_link'                  => _x('', 'me_diab_meal_cp label', 'me-diabetes'),
                // 'item_link_description'      => _x('', 'me_diab_meal_cp label', 'me-diabetes'),
            ],
            'description'        => '',
            'public'             => false,
            'publicly_queryable' => false,
            'hierarchical'       => false,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'show_in_nav_menus'  => false,
            'show_in_rest'       => false,
            'show_tagcloud'      => false,
            'show_in_quick_edit' => true,
            'show_admin_column'  => true,
            'rewrite'            => [
                'slug'         => 'me-diabetes-meal-checkpoint',
                'with_front'   => true,
                'hierarchical' => false,
                'ep_mask'      => EP_NONE,
            ],
            'query_var'          => false,
        ],
    ],
];