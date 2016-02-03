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

	function getCurrentUri(){
		$basepath = implode('/', array_slice(explode('/', $_SERVER['SCRIPT_NAME']), 0, -1)) . '/';
		$uri = substr($_SERVER['REQUEST_URI'], strlen($basepath));
		if (strstr($uri, '?')) $uri = substr($uri, 0, strpos($uri, '?'));
		$uri = '/' . trim($uri, '/');
		return $uri;
	}

	function getPath(){
		return $this->path;
	}
	
	function getMethod(){
		return $this->method;
	}
	
	function getVars($type=null){
	
		if(!isset($type)){
			$type = $this->method;
		}
	
		if($type == "GET"){
			return $this->get;
		} else {
			return $this->post;
		}
	}
}
?>
