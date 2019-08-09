<?php

namespace frdl\Templater;

use frdl\Context as Context;

class SimpleDotNotationReplacer extends Replacer
{
	
    public function replace(Context $context, string $template) : string {
		return preg_replace_callback('/\{\{([\w\.^\{\}]+)\}\}/is', function($m) use ($context){
                if($context->has($m[1])){                	
					   return $context->get($m[1]);	
				}else{
                       return $m[0]; 
               }
          }, $template);			
	}
	
}
