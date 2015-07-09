<?php

define('__ROOT__', dirname(__FILE__));

require_once(__ROOT__ . "/classes/controller.php");
require_once(__ROOT__ . "/classes/router.php");
require_once(__ROOT__ . "/classes/view.php");
require_once(__ROOT__ . "/views/page.php");

$css = Array(
);

$js = Array(
);

$router = new Router();
$args = $router->getRoutes();

include_once(__ROOT__ . "/controllers/front.php");
$front = new FrontController();

$page = $front->process($args);
echo $page->render();


?>
