<?php
class SubController extends Controller{

	public function __construct(){
		parent::__construct();
	
		$this["page1"] = $this->createPage("This is Sub-page1");
		$this["page2"] = $this->createPage("This is Sub-page2");
		$this["page3"] = $this->createPage("This is Sub-page3");
	}
		
	private function createPage($content){
		return function() use ($content){
			include_once(__ROOT__ . "/views/page.php");
			$view = new PageView();
			$view->content = $content;
			return new Controller($view);
		};
	}
}
?>