<?php


namespace Okay\Core\SmartyPlugins\Plugins;


use Okay\Core\SmartyPlugins\Modifier;

class Trim extends Modifier
{
	protected $tag = 'trim';

    public function run($string)
    {
		return trim($string);
    }
}