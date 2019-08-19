<?php

namespace frdl\Templater;

use frdl\Context as Context;

class AdvancedReplacer extends Replacer
{
	
	protected $filters;
	protected $templating;
	
	public function __construct(){
	   $this->filters = [
	      'uppercase' => 'strtoupper',
	      'lowercase' => 'strtolower',
	      'ucfirst' => 'ucfirst',
	      'json' => 'json_encode',
	      'json_encode' => 'json_encode',
	   
	   ];	
		
		$this->templating = new Templating();
	}
		
	public function getTemplating(){
		return $this->templating;
	}
	
	public function getFilters(){
		return $this->filters;
	}
		
	public function setFilters(array $filters){
		$this->filters = $filters;	
	}
	
    public function replace(Context $context, string $template) : string {
		$self = new self;
		return $context(function($ArrayObject) use($self, $template){
		     return $self->getTemplating()->render( $template, $ArrayObject->all(), $self->getFilters() );					
		});

	}
	
}
