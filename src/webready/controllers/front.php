<?php

namespace WebReady\Controllers;

use WebReady\Controller as Controller;
use WebReady\Controllers\NotFoundController as NotFoundController;
use WebReady\Views\PageView as PageView;

class FrontController extends Controller{
	
	public function __construct(){
		parent::__construct();
	}
		
	public function process($request){
		
		$path = $request->getPath();
		
		if(count($path) == 0){
			$view = new PageView();
			$view->title = "Home";
			$view->content = "Welcome to the site! See <a href='about'>about</a>";
			return $view;
		}
		
		if($path[0] == "about"){
			$view = new PageView();
			$view->title = "About";
			$view->content = "This is a demo site for WebReady!";
			return $view;
		}
		
		$not_found = new NotFoundController();
		return $not_found->process($request);
	}
}



?>