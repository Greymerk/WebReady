<?php
class FrontController extends Controller{

	public function __construct(){
		parent::__construct();
		$this->has_children = true;
		$this->view = function(){
			include_once(__ROOT__ . "/views/page.php");
			$view = new PageView();
			$view->content = "Welcome to the WebReady demo site";
			return $view;
		};
		
		$this["page1"] = $this->createPage("This is page1");
		$this["page2"] = $this->createPage("This is page2");
		$this["page3"] = $this->createPage("This is page3");
		
		$this["sub"] = function(){
			include_once(__ROOT__ . "/controllers/sub.php");
			return new SubController();
		};
	}
	
	public function process($args){
		$result = parent::process($args);
		
		if($result == null){
			return $this->not_found();
		}
		
		return $result;
	}

	private function createPage($content){
		return function() use ($content){
				include_once(__ROOT__ . "/views/page.php");
				$view = new PageView();
				$view->content = $content;
				return new Controller($view);
		};
	}
	
	private function not_found(){
		http_response_code(404);
		include_once(__ROOT__ . "/views/page.php");
		$view = new PageView();
		$view->content = "<h2>Page Not Found (404)</h2>";
		return $view;
	}
}
?>