<?php

class NavView extends View{
	
	public function __construct(){
		$this->menu = Array(
			"page1" => "/page1",
			"page2" => "/page2",
			"page3" => "/page3",
			"sub" => Array(
				"page1" => "/sub/page1",
				"page2" => "/sub/page2",
				"page3" => "/sub/page3",
			),
		);
	}

	public function render(){
		return parent::render("menu.tpl");
	}
}

?>