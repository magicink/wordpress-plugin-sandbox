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
          'name' => _x('Sites', 'Post Type General Name', 'plugin_sandbox'),
          'singular_name' => _x('Site', 'Post Type Singular Name', 'plugin_sandbox'),
          'menu_name' => __('Sites', 'plugin_sandbox'),
          'name_admin_bar' => __('Site', 'plugin_sandbox'),
          'archives' => __('Item Archives', 'plugin_sandbox'),
          'attributes' => __('Item Attributes', 'plugin_sandbox'),
          'parent_item_colon' => __('Parent Item:', 'plugin_sandbox'),
          'all_items' => __('All Items', 'plugin_sandbox'),
          'add_new_item' => __('Add New Item', 'plugin_sandbox'),
          'add_new' => __('Add New', 'plugin_sandbox'),
          'new_item' => __('New Item', 'plugin_sandbox'),
          'edit_item' => __('Edit Item', 'plugin_sandbox'),
          'update_item' => __('Update Item', 'plugin_sandbox'),
          'view_item' => __('View Item', 'plugin_sandbox'),
          'view_items' => __('View Items', 'plugin_sandbox'),
          'search_items' => __('Search Item', 'plugin_sandbox'),
          'not_found' => __('Not found', 'plugin_sandbox'),
          'not_found_in_trash' => __('Not found in Trash', 'plugin_sandbox'),
          'featured_image' => __('Featured Image', 'plugin_sandbox'),
          'set_featured_image' => __('Set featured image', 'plugin_sandbox'),
          'remove_featured_image' => __('Remove featured image', 'plugin_sandbox'),
          'use_featured_image' => __('Use as featured image', 'plugin_sandbox'),
          'insert_into_item' => __('Insert into item', 'plugin_sandbox'),
          'uploaded_to_this_item' => __('Uploaded to this item', 'plugin_sandbox'),
          'items_list' => __('Items list', 'plugin_sandbox'),
          'items_list_navigation' => __('Items list navigation', 'plugin_sandbox'),
          'filter_items_list' => __('Filter items list', 'plugin_sandbox'),
        ];
        $args = [
          'label' => __('Site', 'plugin_sandbox'),
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
