<?php

namespace WebReady;

class View {

	const template_dir = 'templates/';
	protected $vars = array();

	public function __construct() {
	}

	public function render($tpl="empty.tpl") {
		ob_start();
		if (file_exists(View::template_dir.$tpl)) {
			include View::template_dir.$tpl;
		} else {
			//include View::template_dir."empty.tpl";
		}
		return ob_get_clean();
	}

	public function __set($name, $value) {
		$this->vars[$name] = $value;
	}

	public function __get($name) {
		return $this->vars[$name];
	}

	public function has($name){
		return array_key_exists($name, $this->vars);
	}
}


?>
