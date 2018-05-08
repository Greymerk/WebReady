<?php

class EmptyView extends View{
	
	public function render($tpl){
		return parent::render("empty.tpl");
	}
}


?>