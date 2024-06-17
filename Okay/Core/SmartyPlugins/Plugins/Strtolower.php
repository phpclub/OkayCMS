<?php


namespace Okay\Core\SmartyPlugins\Plugins;


use Okay\Core\SmartyPlugins\Modifier;

class Strtolower extends Modifier
{
	protected $tag = 'strtolower';

    public function run($string)
    {
		return strtolower($string);
    }
}