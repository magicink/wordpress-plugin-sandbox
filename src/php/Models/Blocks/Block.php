<?php namespace PluginSandbox\Modules\Blocks;

require 'IBlock.php';

if (!class_exists(Block::class)) {
  abstract class Block implements IBlock
  {
  }
}
