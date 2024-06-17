<?php


namespace Okay\Core\SmartyPlugins\Plugins;


use Okay\Core\Image;
use Okay\Core\SmartyPlugins\Modifier;

class Pathinfo extends Modifier
{
	protected $tag = 'pathinfo';

    public function run($filename)
    {
		return pathinfo($filename, PATHINFO_EXTENSION);
    }
}