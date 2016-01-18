<?php

define('__ROOT__', dirname(__FILE__));

require_once(__ROOT__ . "/webready/controller.php");
require_once(__ROOT__ . "/webready/request.php");
require_once(__ROOT__ . "/webready/view.php");

$css = Array(
	"/style/style.css",
);

$js = Array(
);

$request = new Request();
var_dump($request->getPath());
echo "<br />";
var_dump($request->getMethod());
echo "<br />";
echo json_encode($request->getContent());

?>
