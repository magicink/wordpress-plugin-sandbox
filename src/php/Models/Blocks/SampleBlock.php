<?php namespace PluginSandbox\Modules\Blocks;

require 'Block.php';

if(!class_exists(SampleBlock::class)) {
    class SampleBlock extends Block
    {
        public function __construct()
        {
            add_action('init', [$this, 'register']);
        }
        public function register() {

        }
    }
}
