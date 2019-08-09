<?php

namespace frdl\Templater;

use frdl\Context as Context;

abstract class Replacer implements ReplacerInterface
{
	
    final public static function __callStatic($name, $arguments){
		return call_user_func_array([new self, $name], $arguments);
	}
	
	abstract public function replace(Context $context, string $template) : string;
}
