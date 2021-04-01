<?php namespace PluginSandbox\Modules\PostTypes;

require 'IPostType.php';

if (!class_exists(PostType::class)) {
  abstract class PostType implements IPostType
  {
    public function __construct()
    {
      add_action('init', [$this, 'register']);
    }

    public function get_labels($name, $singular, $plural, $domain): array
    {
      return [
        'name' => _x($name, 'Post Type General Name', $domain),
        'singular_name' => _x($singular, 'Post Type Singular Name', $domain),
        'menu_name' => __($name, $domain),
        'name_admin_bar' => __($name, $domain),
        'archives' => __("{$singular} Archives", $domain),
        'attributes' => __("{$singular} Attributes", $domain),
        'parent_item_colon' => __("Parent {$singular}:", $domain),
        'all_items' => __("All {$plural}", $domain),
        'add_new_item' => __("Add New {$singular}", $domain),
        'add_new' => __('Add New', $domain),
        'new_item' => __("New {$singular}", $domain),
        'edit_item' => __("Edit {$singular}", $domain),
        'update_item' => __("Update {$singular}", $domain),
        'view_item' => __("View {$singular}", $domain),
        'view_items' => __("View {$plural}", $domain),
        'search_items' => __("Search {$singular}", $domain),
        'not_found' => __('Not found', $domain),
        'not_found_in_trash' => __('Not found in Trash', $domain),
        'featured_image' => __('Featured Image', $domain),
        'set_featured_image' => __('Set featured image', $domain),
        'remove_featured_image' => __('Remove featured image', $domain),
        'use_featured_image' => __('Use as featured image', $domain),
        'insert_into_item' => __("Insert into {$singular}", $domain),
        'uploaded_to_this_item' => __("Uploaded to this {$singular}", $domain),
        'items_list' => __("{$plural} list", $domain),
        'items_list_navigation' => __("{$plural} list navigation", $domain),
        'filter_items_list' => __("Filter {$plural} list", $domain),
      ];
    }
  }
}
