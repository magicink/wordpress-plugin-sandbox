<?php namespace PluginSandbox\Modules;

if (!class_exists(Site::class)) {
    class Site
    {
      public function __construct()
      {
        add_action('init', [$this, 'register_post_type']);
      }

      function register_post_type()
      {
        $labels = [
          'name' => _x('Sites', 'Post Type General Name', 'plugin_lab'),
          'singular_name' => _x('Site', 'Post Type Singular Name', 'plugin_lab'),
          'menu_name' => __('Sites', 'plugin_lab'),
          'name_admin_bar' => __('Site', 'plugin_lab'),
          'archives' => __('Item Archives', 'plugin_lab'),
          'attributes' => __('Item Attributes', 'plugin_lab'),
          'parent_item_colon' => __('Parent Item:', 'plugin_lab'),
          'all_items' => __('All Items', 'plugin_lab'),
          'add_new_item' => __('Add New Item', 'plugin_lab'),
          'add_new' => __('Add New', 'plugin_lab'),
          'new_item' => __('New Item', 'plugin_lab'),
          'edit_item' => __('Edit Item', 'plugin_lab'),
          'update_item' => __('Update Item', 'plugin_lab'),
          'view_item' => __('View Item', 'plugin_lab'),
          'view_items' => __('View Items', 'plugin_lab'),
          'search_items' => __('Search Item', 'plugin_lab'),
          'not_found' => __('Not found', 'plugin_lab'),
          'not_found_in_trash' => __('Not found in Trash', 'plugin_lab'),
          'featured_image' => __('Featured Image', 'plugin_lab'),
          'set_featured_image' => __('Set featured image', 'plugin_lab'),
          'remove_featured_image' => __('Remove featured image', 'plugin_lab'),
          'use_featured_image' => __('Use as featured image', 'plugin_lab'),
          'insert_into_item' => __('Insert into item', 'plugin_lab'),
          'uploaded_to_this_item' => __('Uploaded to this item', 'plugin_lab'),
          'items_list' => __('Items list', 'plugin_lab'),
          'items_list_navigation' => __('Items list navigation', 'plugin_lab'),
          'filter_items_list' => __('Filter items list', 'plugin_lab'),
        ];
        $args = [
          'label' => __('Site', 'plugin_lab'),
          'labels' => $labels,
          'supports' => ['title', 'editor'],
          'taxonomies' => [],
          'hierarchical' => false,
          'public' => true,
          'show_ui' => true,
          'show_in_menu' => true,
          'menu_position' => 99,
          'show_in_admin_bar' => true,
          'show_in_nav_menus' => true,
          'can_export' => true,
          'has_archive' => true,
          'exclude_from_search' => false,
          'publicly_queryable' => true,
          'capability_type' => 'page',
          'show_in_rest' => true,
          'rest_base' => 'lab/sites',
        ];
        register_post_type('site', $args);
      }
    }
}
