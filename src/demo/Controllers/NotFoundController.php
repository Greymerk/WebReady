<?php

namespace Demo\Controllers;

use WebReady\Controller as Controller;

class NotFoundController extends Controller{
	
	public function __construct(){
		parent::__construct();
	}
	
	public function process($request){
		http_response_code(404);
		$view = new PageView();
		$view->title = "404 Not Found";
		$view->content = "<h2>Page Not Found (404)</h2>";
		return $view;
	}
}
	
?>