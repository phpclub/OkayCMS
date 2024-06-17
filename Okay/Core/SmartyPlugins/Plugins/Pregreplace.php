<?php


namespace Okay\Core\SmartyPlugins\Plugins;


use Okay\Core\SmartyPlugins\Modifier;
//{preg_replace('~[^0-9\+]~', '', $phone)}
class Pregreplace extends Modifier
{
	protected $tag = 'preg_replace';

    public function run($subject,$pattern,$replacement)
    {
		return preg_replace($pattern,$replacement,$subject);
    }
}