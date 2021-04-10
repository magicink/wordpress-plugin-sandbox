<?php namespace PluginSandbox;
/**
 * Plugin Name: WordPress Plugin Sandbox
 */
require_once 'src/php/Models/PostTypes/SitePostType.php';
require_once 'src/php/Models/Blocks/ComicPanelBlock.php';

if (!class_exists(PluginSandbox::class)) {
  class PluginSandbox
  {
    /** @noinspection PhpExpressionResultUnusedInspection */
    public function __construct()
    {
      new Modules\PostTypes\SitePostType();
      new Modules\Blocks\ComicPanelBlock();
    }
  }

  new PluginSandbox();
}
