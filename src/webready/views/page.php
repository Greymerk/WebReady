<?php

namespace WebReady\Views;

use WebReady\View as View;

class PageView extends View{

	public function __construct(){
		$this->js = glob("js/*.js");
		$this->css = glob("style/*.css");
	}

	public function render($tpl="page.tpl"){		
		return parent::render($tpl);
	}
}

?>