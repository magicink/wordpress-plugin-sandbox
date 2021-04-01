<?php namespace PluginSandbox\Modules\PostTypes;

if (!interface_exists(IPostType::class)) {
  interface IPostType
  {
    public function register();
  }
}
