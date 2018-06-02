<?php

require_once "vendor/autoload.php";

use WebReady\Controllers\FrontController as FrontController;
use WebReady\Request as Request;

$front = new FrontController();

$request = new Request();

$page = $front->process($request);
echo $page->render();

?>
