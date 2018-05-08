<?php

class PageView extends View{

	public function __construct(){
		$this->js = glob("js/*.js");
		$this->css = glob("style/*.css");
	}

	public function render($tpl){		
		return parent::render("page.tpl");
	}
}

?>