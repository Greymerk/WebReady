<?php

require_once "vendor/autoload.php";

use WebReady\Request as Request;
use Demo\Controllers\FrontController as FrontController;

$front = new FrontController();

$request = new Request();

$page = $front->process($request);
echo $page->render();

?>
