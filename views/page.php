<?php

class PageView extends View{

	public function __construct(){
		$this->js = Array();
		$this->css = Array();
		
		include_once(__ROOT__ . "/views/nav.php");
		$menu = new NavView();
		$this->menu = $menu->render();
	
		$router = new Router();
		$args = $router->getRoutes();
		if(count($args) == 0){
			$this->content = "Welcome to the front page";
		} else {
			switch($args[0]){
			case "page1": $this->content = "Content for page one."; break;
			case "page2": $this->content = "Stuff on page two."; break;
			case "page3": $this->content = "Page three things."; break;
			default: $this->content = "Page Not Found";
			}
		}
	}

	public function render(){
		return parent::render("page.tpl");
	}
}

?>