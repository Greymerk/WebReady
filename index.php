<?php

define('__ROOT__', dirname(__FILE__));
require_once(__ROOT__ . "/webready/controller.php");
require_once(__ROOT__ . "/webready/request.php");
require_once(__ROOT__ . "/webready/view.php");

include_once(__ROOT__ . "/controllers/front.php");
$front = new FrontController();

$request = new Request();

$page = $front->process($request);
echo $page->render();

?>
