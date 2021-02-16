<?php namespace PluginSandbox;
/**
 * Plugin Name: WordPress Plugin Sandbox
 */
require_once 'Modules/Site.php';

if (!class_exists(PluginSandbox::class)) {
    class PluginSandbox
    {
      public function __construct()
      {
        new Modules\Site();
      }
    }
    new PluginSandbox();
}