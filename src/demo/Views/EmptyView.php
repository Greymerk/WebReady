<?php

namespace Demo\Views;

use WebReady\View as View;

class EmptyView extends View{
	public function render($tpl="empty.tpl"){
		return parent::render($tpl);
	}
}


?>