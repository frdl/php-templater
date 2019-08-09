<?php

namespace frdl\Templater;

use frdl\Context as Context;


interface ReplacerInterface
{
	public function replace(Context $context, string $template) : string;		
}
