<?php namespace PluginSandbox\Modules\Blocks;

require 'Block.php';

if (!class_exists(ComicPanelBlock::class)) {
  class ComicPanelBlock extends Block
  {
    public function __construct()
    {
      add_action('init', [$this, 'register']);
    }

    public function register()
    {
      wp_register_script(
        'comic-panel-block-editor',
        'http://localhost:3893/build/js/blocks.js',
        ['wp-blocks', 'wp-block-editor', 'wp-components', 'wp-element']
      );
      wp_register_style(
        'comic-panel-block-editor',
        'http://localhost:3893/build/js/blocks.css'
      );
      wp_register_style(
        'comic-panel-block-editor',
        'http://localhost:3893/build/js/blocks.css'
      );
      register_block_type('plugin-sandbox/comic-panel-block-editor', [
        'apiVersion' => 2,
        'editor_script' => 'comic-panel-block-editor',
        'editor_style' => 'comic-panel-block-editor',
        'style' => 'comic-panel-block-editor',
      ]);
    }
  }
}