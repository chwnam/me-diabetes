<?php
/**
 * Custom Post Type (CPT) configuration
 */

if (!defined('ABSPATH')) {
    exit;
}

return [
    //
    ///////////////////////////////////////////////////////////////////////////
    // CPT: me_diab
    [
        CPT_DIABETES,
        [
            'label'               => __('Me Diabetes', 'me-diabetes'),
            'labels'              => [
                'name'          => _x('Diabetes Records', 'me_diab label', 'me-diabetes'),
                'singular_name' => _x('Diabetes Record', 'me_diab label', 'me-diabetes'),
                // 'add_new'                  => _x('', 'me_diab label', 'me-diabetes'),
                // 'add_new_item'             => _x('', 'me_diab label', 'me-diabetes'),
                // 'edit_item'                => _x('', 'me_diab label', 'me-diabetes'),
                // 'new_item'                 => _x('', 'me_diab label', 'me-diabetes'),
                // 'view_item'                => _x('', 'me_diab label', 'me-diabetes'),
                // 'view_items'               => _x('', 'me_diab label', 'me-diabetes'),
                // 'search_items'             => _x('', 'me_diab label', 'me-diabetes'),
                // 'not_found'                => _x('', 'me_diab label', 'me-diabetes'),
                // 'not_found_in_trash'       => _x('', 'me_diab label', 'me-diabetes'),
                // 'parent_item_colon'        => _x('', 'me_diab label', 'me-diabetes'),
                // 'all_items'                => _x('', 'me_diab label', 'me-diabetes'),
                // 'archives'                 => _x('', 'me_diab label', 'me-diabetes'),
                // 'attributes'               => _x('', 'me_diab label', 'me-diabetes'),
                // 'insert_into_item'         => _x('', 'me_diab label', 'me-diabetes'),
                // 'uploaded_to_this_item'    => _x('', 'me_diab label', 'me-diabetes'),
                // 'featured_image'           => _x('', 'me_diab label', 'me-diabetes'),
                // 'set_featured_image'       => _x('', 'me_diab label', 'me-diabetes'),
                // 'remove_featured_image'    => _x('', 'me_diab label', 'me-diabetes'),
                // 'use_featured_image'       => _x('', 'me_diab label', 'me-diabetes'),
                'menu_name'     => _x('Diabetes', 'me_diab label', 'me-diabetes'),
                // 'filter_items_list'        => _x('', 'me_diab label', 'me-diabetes'),
                // 'filter_by_date'           => _x('', 'me_diab label', 'me-diabetes'),
                // 'items_list_navigation'    => _x('', 'me_diab label', 'me-diabetes'),
                // 'items_list'               => _x('', 'me_diab label', 'me-diabetes'),
                // 'item_published'           => _x('', 'me_diab label', 'me-diabetes'),
                // 'item_published_privately' => _x('', 'me_diab label', 'me-diabetes'),
                // 'item_reverted_to_draft'   => _x('', 'me_diab label', 'me-diabetes'),
                // 'item_trashed'             => _x('', 'me_diab label', 'me-diabetes'),
                // 'item_scheduled'           => _x('', 'me_diab label', 'me-diabetes'),
                // 'item_updated'             => _x('', 'me_diab label', 'me-diabetes'),
                // 'item_link'                => _x('', 'me_diab label', 'me-diabetes'),
                // 'item_link_description'    => _x('', 'me_diab label', 'me-diabetes'),
            ],
            'description'         => _x('Diabetes related records', 'Description of me_diab', 'me-diabetes'),
            'public'              => false,
            'hierarchical'        => false,
            'exclude_from_search' => true,
            'publicly_queryable'  => false,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => false,
            'show_in_admin_bar'   => true,
            'show_in_rest'        => false,
            'menu_icon'           => 'dashicons-edit-large',
            'map_meta_cap'        => true,
            'supports'            => ['title', 'editor'],
            'has_archive'         => false,
            'rewrite'             => [
                'slug'       => 'me-diabetes',
                'with_front' => false,
                'feeds'      => false,
                'pages'      => false,
                'ep_mask'    => EP_PERMALINK,
            ],
            'query_var'           => false,
            'can_export'          => true,
            'delete_with_user'    => null,
        ],
    ],
];
