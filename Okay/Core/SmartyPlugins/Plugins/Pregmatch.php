<?php


namespace Okay\Core\SmartyPlugins\Plugins;


use Okay\Core\SmartyPlugins\Modifier;

//!preg_match('~^https?://.*$~', $social.url)
class Pregmatch extends Modifier
{
	protected $tag = 'preg_match';

    public function run($subject,$pattern)
    {
		return preg_match($pattern,$subject);
    }
}