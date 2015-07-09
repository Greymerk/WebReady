<?php

class Router { 

	function __construct(){
		$base_url = $this->getCurrentUri();
		$this->routes = array();
		foreach(explode('/', $base_url) as $route){
			if(trim($route) != '')
				array_push($this->routes, $route);
		}
	}

	function getCurrentUri(){
		$basepath = implode('/', array_slice(explode('/', $_SERVER['SCRIPT_NAME']), 0, -1)) . '/';
		$uri = substr($_SERVER['REQUEST_URI'], strlen($basepath));
		if (strstr($uri, '?')) $uri = substr($uri, 0, strpos($uri, '?'));
		$uri = '/' . trim($uri, '/');
		return $uri;
	}

	function getRoutes(){
		return $this->routes;
	}
 
}
?>

