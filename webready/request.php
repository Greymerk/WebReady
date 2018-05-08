<?php

class Request{

	function __construct(){
		$base_url = $this->getCurrentUri();
		$this->path = array();
		foreach(explode('/', $base_url) as $route){
			if(trim($route) != '')
				array_push($this->path, $route);
		}
		$this->method = $_SERVER['REQUEST_METHOD'];
		$this->get = $_GET;
		$this->post = $_POST;
	}

	public function getCurrentUri(){
		$basepath = implode('/', array_slice(explode('/', $_SERVER['SCRIPT_NAME']), 0, -1)) . '/';
		$uri = substr($_SERVER['REQUEST_URI'], strlen($basepath));
		if (strstr($uri, '?')) $uri = substr($uri, 0, strpos($uri, '?'));
		$uri = '/' . trim($uri, '/');
		return $uri;
	}

	public function getPath(){
		return $this->path;
	}
	
	public function getMethod(){
		return $this->method;
	}
	
	public function getParams(){
		if($this->method == "GET"){
			return $this->get;
		}
		
		if($this->method == "POST"){
			return $this->post;
		}
	}
	
	function shift(){
		if(count($this->path) == 0) return;
		array_shift($this->path);
	}
}
?>
