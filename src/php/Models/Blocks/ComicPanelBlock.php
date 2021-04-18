<?php namespace PluginSandbox\Modules\Blocks;

require 'Block.php';

if (!class_exists(ComicPanelBlock::class)) {
  class ComicPanelBlock extends Block
  {
    public function __construct()
    {
      add_action('init', [$this, 'register']);
      add_filter('block_categories', [$this, 'register_category']);
    }

    public function register()
    {
      $plugin_url = plugins_url('plugin-lab/build/', 'plugin-lab');
      wp_register_script(
        'comic-panel-block-editor',
        "{$plugin_url}/blocks.js",
        ['wp-blocks', 'wp-block-editor']
      );
      wp_register_style('comic-panel-block-editor', "{$plugin_url}/blocks.css");
      wp_register_style('comic-panel-block-editor', "{$plugin_url}/blocks.css");
      register_block_type('plugin-sandbox/comic-panel-block-editor', [
        'apiVersion' => 2,
        'editor_script' => 'comic-panel-block-editor',
        'editor_style' => 'comic-panel-block-editor',
        'style' => 'comic-panel-block-editor',
      ]);
    }
    public function register_category($categories): array
    {
      return array_merge($categories, [
        [
          'slug' => 'comic-script',
          'title' => 'Comic Script',
        ],
      ]);
    }
  }
}
