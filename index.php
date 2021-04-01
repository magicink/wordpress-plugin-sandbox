<?php namespace PluginSandbox;
/**
 * Plugin Name: WordPress Plugin Sandbox
 */
require_once 'src/php/Models/PostTypes/Site.php';
require_once 'src/php/Models/Blocks/SampleBlock.php';
require_once 'src/php/Models/Blocks/OtherBlock.php';

if (!class_exists(PluginSandbox::class)) {
    class PluginSandbox
    {
        /** @noinspection PhpExpressionResultUnusedInspection */
        public function __construct()
        {
            new Modules\PostTypes\Site();
        }
    }

    new PluginSandbox();
}
