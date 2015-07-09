<?php

class View {

	const template_dir = 'templates/';
	protected $vars = array();

	public function __construct() {
	}

	public function render($template_file) {
		if (file_exists(View::template_dir.$template_file)) {
			ob_start();
			include View::template_dir.$template_file;
			return ob_get_clean();
		} else {
			throw new Exception('no template file ' . $template_file . ' present in directory ' . View::template_dir);
		}
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
