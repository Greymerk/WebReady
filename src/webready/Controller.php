<?php

namespace WebReady;

use ArrayAccess;

class Controller implements ArrayAccess{

	protected $view;
	protected $vars;
	protected $has_children;

	public function __construct($view=null){
		if(!is_null($view)){
			$this->view = function() use ($view){
				return $view;
			};
		} else {
			$this->view = null;
		}
		$this->vars = array();
		$this->has_children = false;
	}
	
	public function process($request){
	
		$path = $request->getPath();
	
		if(($this->has_view() && count($path) == 0) ||
		   ($this->has_view() && $this->has_children == false)){
		   $callback = $this->view;
			return $callback();
		}

		if(count($path) == 0){
			return null;
		}
	
		if(!$this->has($path[0])){
			return null;
		}		

		$ctrl = $this->vars[$path[0]]();
		array_shift($path);
		return $ctrl->process($request);
	}
	
	public function has($name){
		return array_key_exists($name, $this->vars);
	}

	public function offsetSet($offset, $value) {
		if (is_null($offset)) {
			$this->vars[] = $value;
		} else {
			$this->vars[$offset] = $value;
		}
	}

	public function offsetExists($offset) {
		return isset($this->vars[$offset]);
	}

	public function offsetUnset($offset) {
		unset($this->vars[$offset]);
	}

	public function offsetGet($offset) {
		return isset($this->vars[$offset]) ? $this->vars[$offset] : null;
	}
	
	private function has_view(){
		return !is_null($this->view);
	}
}
?>