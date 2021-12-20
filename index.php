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
    }
  }

  new PluginSandbox();
}
