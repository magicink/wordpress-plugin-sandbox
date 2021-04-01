<?php namespace PluginSandbox\Modules\Blocks;

if (!interface_exists(IBlock::class)) {
  interface IBlock
  {
    public function register();
  }
}
