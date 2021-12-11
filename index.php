<?php namespace PluginSandbox;
/**
 * Plugin Name: WordPress Plugin Sandbox
 */

if (!class_exists(PluginSandbox::class)) {
  class PluginSandbox
  {
    public function __construct()
    {
      remove_filter('the_content', 'wpautop');
      add_filter( 'pods_register_post_type_mycpt', 'add_pods_graphql_support' );
      add_filter( 'pods_register_taxonomy_mytax', 'add_pods_graphql_support' );

      function add_pods_graphql_support( $options ) {

        $options['show_in_graphql'] = true;
        $options['graphql_single_name'] = $options['labels']['name'];
        $options['graphql_plural_name'] = $options['labels']['singular_name'];

        return $options;
      }
    }
  }

  new PluginSandbox();
}
