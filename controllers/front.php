<?php

class FrontController extends Controller{
	
	public function __construct(){
		parent::__construct();
	}
		
	public function process($request){
		
		$path = $request->getPath();
		
		if(count($path) == 0){
			include_once(__ROOT__ . "/views/page.php");
			$view = new PageView();
			$view->title = "Home";
			$view->content = "Welcome to the site! See <a href='about'>about</a>";
			return $view;
		}
		
		if($path[0] == "about"){
			include_once(__ROOT__ . "/views/page.php");
			$view = new PageView();
			$view->title = "About";
			$view->content = "This is a demo site for WebReady!";
			return $view;
		}
		
		include_once(__ROOT__ . "/controllers/not-found.php");
		$not_found = new NotFoundController();
		return $not_found->process($request);
	}
}



?>