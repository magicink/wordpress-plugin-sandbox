<?php namespace PluginSandbox\Modules\PostTypes;

require 'PostType.php';

if (!class_exists(Site::class)) {
  class Site extends PostType
  {
    function register()
    {
      $labels = $this->get_labels('Sites', 'Site', 'Sites', 'plugin_sandbox');
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
